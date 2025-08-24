<?php

namespace App\Http\Controllers;

require_once base_path()."/vendor/autoload.php";
require_once __DIR__."/html_tag_helpers.php";

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class FrontendController extends Controller
{
    public function index()
    {
        $i = 1;
        $j = 1;
        // $baseUrl = config('app.url');
        $graph = new \EasyRdf\Graph('https://tourism.up.railway.app/rdfFile/recommend.rdf');
        $graph->parseFile(public_path('rdfFile/recommend.rdf'), 'rdfxml');
        $doc = $graph->primaryTopic();

        // //   Deklarasi namespace
        \EasyRdf\RdfNamespace::set('rdf', 'http://www.w3.org/1999/02/22-rdf-syntax-ns#');
        \EasyRdf\RdfNamespace::set('rdfs', 'http://www.w3.org/2000/01/rdf-schema#');
        \EasyRdf\RdfNamespace::set('dbp', 'http://dbpedia.org/property/');
        \EasyRdf\RdfNamespace::set('dbr', 'http://dbpedia.org/resource/');

        // //    Asal pengambilan data
        $sparql = new \EasyRdf\Sparql\Client('https://dbpedia.org/sparql');

        $country = $sparql->query(
            'SELECT ?flag WHERE{'.
            // 'dbr:'.str_replace(' ', '_', ucwords($request->mysearch)).' <http://dbpedia.org/ontology/thumbnail> ?flag.'.
            'dbr:Indonesia <http://dbpedia.org/ontology/thumbnail> ?flag.'.
            '}'
            
          );

        return view('frontend.home', compact('country','doc','i','j'));
    }

 
    public function result(Request $request){

        // //   Deklarasi namespace
        \EasyRdf\RdfNamespace::set('db', 'http://dbpedia.org/');
        \EasyRdf\RdfNamespace::set('rdf', 'http://www.w3.org/1999/02/22-rdf-syntax-ns#');
        \EasyRdf\RdfNamespace::set('rdfs', 'http://www.w3.org/2000/01/rdf-schema#');
        \EasyRdf\RdfNamespace::set('dbo', 'http://dbpedia.org/ontology/');
        \EasyRdf\RdfNamespace::set('dbp', 'http://dbpedia.org/property/');
        \EasyRdf\RdfNamespace::set('dbr', 'http://dbpedia.org/resource/');
        \EasyRdf\RdfNamespace::set('geo', 'http://www.w3.org/2003/01/geo/wgs84_pos#');

        // //    Asal pengambilan data
        $sparql = new \EasyRdf\Sparql\Client('https://dbpedia.org/sparql');

        $results = $sparql->query(
            'SELECT DISTINCT 
                  (SAMPLE(?place) AS ?source) 
                  (SAMPLE(?label) AS ?nama_tempat) 
                  (SAMPLE(?locationLabel) AS ?lokasi)
                  (SAMPLE(?comment) AS ?deskripsi) 
                  (SAMPLE(?image) AS ?gambar) 
                  (SAMPLE(?lat) AS ?lat) 
                  (SAMPLE(?long) AS ?long)
              WHERE {
                  dbr:Tourism_in_'.str_replace(' ', '_', ucwords($request->mysearch)).' dbo:wikiPageWikiLink ?place .
                  ?place a dbo:Place ;
                        rdfs:label ?label ;
                        rdfs:comment ?comment ;
                        dbo:location ?location .
                  OPTIONAL { ?place dbo:thumbnail ?image . }
                  OPTIONAL { ?place geo:lat ?lat . }
                  OPTIONAL { ?place geo:long ?long . }
                  OPTIONAL { ?location rdfs:label ?locationLabel . }
                  OPTIONAL { ?place dbo:areaCode ?kode_pos . }
                  OPTIONAL { ?place dbp:imageFlag ?isNegara . }
                  FILTER (lang(?label) = "en")
                  FILTER (lang(?comment) = "en")
                  FILTER (lang(?locationLabel) = "en")
                  MINUS { FILTER (contains(?kode_pos, "+")) }
                  MINUS { FILTER (contains(?isNegara, ".svg")) }
              }
              GROUP BY ?place
              ORDER BY DESC(?place)
              LIMIT 25'
        );

        foreach ($results as $row) {
            // Fallback ke Wikipedia API kalau gambar DBpedia kosong
            $gambar = !empty($row->gambar) ? (string) $row->gambar : null;

            if (empty($gambar) && !empty($row->nama_tempat)) {
                // Coba ambil dari Wikipedia
                $wikiTitle = urlencode($row->nama_tempat);
                $wikiResponse = Http::get("https://en.wikipedia.org/w/api.php", [
                    'action' => 'query',
                    'titles' => $wikiTitle,
                    'prop'   => 'pageimages',
                    'format' => 'json',
                    'pithumbsize' => 500
                ]);

                if ($wikiResponse->ok()) {
                    $wikiData = $wikiResponse->json();
                    foreach ($wikiData['query']['pages'] ?? [] as $page) {
                        if (isset($page['thumbnail']['source'])) {
                            $gambar = $page['thumbnail']['source'];
                            break;
                        }
                    }
                }
            }

            // Fallback terakhir: placeholder
            if (empty(trim($gambar))) {
                $gambar = asset('images/placeholder.jpg');
            }

            $data[] = [
                'source'      => (string) $row->source,
                'nama_tempat' => isset($row->nama_tempat) ? (string) $row->nama_tempat : 'N/A',
                'lokasi'      => isset($row->lokasi) ? (string) $row->lokasi : 'N/A',
                'deskripsi'   => isset($row->deskripsi) ? (string) $row->deskripsi : 'N/A',
                'gambar'      => $gambar,
                'lat'         => isset($row->lat) ? (string) $row->lat : null,
                'long'        => isset($row->long) ? (string) $row->long : null,
            ];
        }
        $result = collect($data);

        
        $search = $request->mysearch;

        DB::table('search')->insert([
          'searching' => str_replace(' ', '_', ucwords($request->mysearch)),
          'waktu_cari' => now()
        ]);
        // dd($result);

        return view('frontend.result', compact('result','search'));
    }

    public function detail(Request $request){

      // return($request->mysearch);
      
      // //   Deklarasi namespace
      \EasyRdf\RdfNamespace::set('db', 'http://dbpedia.org/');
      \EasyRdf\RdfNamespace::set('rdf', 'http://www.w3.org/1999/02/22-rdf-syntax-ns#');
      \EasyRdf\RdfNamespace::set('rdfs', 'http://www.w3.org/2000/01/rdf-schema#');
      \EasyRdf\RdfNamespace::set('dbo', 'http://dbpedia.org/ontology/');
      \EasyRdf\RdfNamespace::set('dbp', 'http://dbpedia.org/property/');
      \EasyRdf\RdfNamespace::set('dbr', 'http://dbpedia.org/resource/');
      \EasyRdf\RdfNamespace::set('geo', 'http://www.w3.org/2003/01/geo/wgs84_pos#');

      // //    Asal pengambilan data
      $sparql = new \EasyRdf\Sparql\Client('https://dbpedia.org/sparql');

      $source = $request->src;
      // dd($source);

        $query = '
        SELECT DISTINCT
        (SAMPLE(?name) AS ?nama_tempat)
        (SAMPLE(?locationLabel) AS ?lokasi)
        (SAMPLE(?desc) AS ?deskripsi)
        (SAMPLE(?img) AS ?gambar)
        (SAMPLE(?lat) AS ?lat)
        (SAMPLE(?long) AS ?long)
        WHERE {
        <'.$source.'> a dbo:Place ;
                        rdfs:label   ?name ;
                        rdfs:comment ?desc ;
                        dbo:location ?location ;
                        geo:lat      ?lat ;
                        geo:long     ?long .

        OPTIONAL { <'.$source.'> dbo:thumbnail ?img . }
        OPTIONAL { ?location rdfs:label ?locationLabel . }

        FILTER (lang(?name) IN ("id","en"))
        FILTER (lang(?desc) IN ("id","en"))
        FILTER (lang(?locationLabel) IN ("id","en"))
        }
        ORDER BY 
        (lang(?name) = "id") DESC
        (lang(?desc) = "id") DESC
        (lang(?locationLabel) = "id") DESC
        LIMIT 1
        ';

        $result = $sparql->query($query);
  
        // dd($result);

      
      return view('frontend.detail', compact('result'));
  }

  public function detailRecommend($id){
    $recommend = DB::table('recommend')->where('id', $id)->first();
    // dd($recommend);

    return view('frontend.detailRecommend', compact('recommend'));    
  }

}
