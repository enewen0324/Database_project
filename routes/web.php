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

Route::get("/undertaker/{city_name}", "navbarShowController@showUndertaker");

Route::post("/customizedSearch/result", "searchResultController@result")
        ->name("customizedSearch.result");