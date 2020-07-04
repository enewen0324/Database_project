<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class searchResultController extends Controller
{
    //
    public function result(Request $request) {
        $all_data = $request->all();
        $east_west = $all_data["east_west"];
        $religion = $all_data["religion"];
        $now_city_name = $all_data["now_city_name"];
        $sleep_city_name = $all_data["sleep_city_name"];
        $leave_type = $all_data["leave_type"];
        $budget = $all_data["budget"];
        
        
    }
}
