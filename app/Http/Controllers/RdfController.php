<?php

namespace App\Http\Controllers;
require_once base_path()."/vendor/autoload.php";
require_once __DIR__."/html_tag_helpers.php";
use Illuminate\Http\Request;

class RdfController extends Controller
{
    public function recommend(){
         return redirect('recommend.rdf');
    }

    public function rdftest(){
       
        $i = 0;
        $uri_rdf = 'http://localhost:8080/RdfFile/recommend.rdf';
        // $uri_rdf = 'http://localhost/PrakWs08/Fahru.rdf';
        $data = \EasyRdf\Graph::newAndLoad($uri_rdf);
        $doc = $data->primaryTopic();

        return view('frontend.testRdf', compact('doc', 'i'));
    }
}
