<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class navbarShowController extends Controller
{
    //
    public function showIndex() {
        return view("index");
    }

    public function showCustomizedSearch() {
        return view("customizedSearch");
    }
}
