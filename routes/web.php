<?php

use Illuminate\Support\Facades\Route;

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

Route::permanentRedirect("/", "/index");

Route::get("/index", "navbarShowController@showIndex");

Route::get("/customizedSearch", "navbarShowController@showCustomizedSearch");

Route::get("/etiquette/{city_name}", "navbarShowController@showEtiquette");

Route::get("/public_cem/{city_name}", "navbarShowController@showPulbicCem");
Route::get("/public_cem/id/{id}", "cemeteryidController@publicCemId");

Route::get("/undertaker/{city_name}", "navbarShowController@showUndertaker");
Route::get("/undertaker/id/{id}", "cemeteryidController@undertakerId");

Route::get("/fireplace/{city_name}", "navbarShowController@showFireplace");
Route::get("/fireplace/id/{id}", "cemeteryidController@fireplaceId");

Route::get("/pagoda/{city_name}", "navbarShowController@showPagoda");
Route::get("/pagoda/id/{id}", "cemeteryidController@pagodaId");

Route::get("/greenburial/{city_name}", "navbarShowController@showGreenburial");

Route::post("/customizedSearch/result", "searchResultController@result")
        ->name("customizedSearch.result");
Route::get("/customizedSearch/id/{id}", "cemeteryidController@customizedSearchId");

Route::get("/test", "testShowController@showTestSearch");
Route::post("/testSearch/result", "testShowController@result")
        ->name("testSearch.result");

Route::get("/contract/{city_name}", "navbarShowController@showContract");