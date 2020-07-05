<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class calenderSearchController extends Controller
{
    //
    public function result(Request $request) {
        $all_data = $request->all();
        $date = strval($all_data["date"]);
        $date = str_replace("-0", "-", $date);
        $date = str_replace("-", "/", $date);
        
        $sql = "SELECT
                    cal.date,
                    cal.time,
                    cal.good,
                    cal.bad,
                    cal.apttime,
                    cal.badtime,
                    cal.badfordead
                FROM
                    calender AS cal
                WHERE
                    cal.date = %replace_later%";
        $date = "'".$date."'";
        $sql = str_replace("%replace_later%", $date, $sql);
        $calender_data = DB::select($sql);

        return view("calenderResult", [
            "variable" => $calender_data
        ]);
    }
}
