<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\RdfController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//Route RDF
Route::get('/rdf/recommend', [RdfController::class, 'recommend']);
Route::get('/testrdf', [RdfController::class, 'rdftest']);

// Route Frontend
Route::get('/', [FrontendController::class, 'index']);
Route::post('/result', [FrontendController::class, 'result']);
Route::post('/detail', [FrontendController::class, 'detail']);
Route::get('/Detail/{id}', [FrontendController::class, 'detailRecommend']);


Auth::routes(); 



