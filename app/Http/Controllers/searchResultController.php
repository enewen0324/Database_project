<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class searchResultController extends Controller
{
    //
    public function result(Request $request) {
        $all_data = $request->all();
        $east_west = $all_data["east_west"];
        $religion = $all_data["religion"];
        $now_city_name = $all_data["now_city_name"];
        $sleep_city_name = $all_data["sleep_city_name"];
        $leave_type = strval($all_data["leave_type"]);
        $budget = $all_data["budget"];

        $sql = "SELECT
                    id
                FROM
                    cities
                WHERE
                    city_name = '%replace_later%'";
        $sql = str_replace("%replace_later%", $sleep_city_name, $sql);
        $city_id = DB::select($sql)[0]->id;
        
        $sql = "SELECT
                    cit.city_name,
                    cit.area,
                    cem.id,
                    cem.facility_name,
                    cem.facility_class,
                    cem.facility_type,
                    cem.phone,
                    cem.fax,
                    cem.url,
                    cem.email,
                    cem.address
                FROM
                    cities AS cit,
                    cemetery AS cem
                WHERE
                    cit.id = %replace_city_id%
                    AND cem.city_id = %replace_city_id%
                    AND cit.id = cem.city_id
                    AND cem.facility_type = %replace_leave_type%";
        $sql = str_replace("%replace_city_id%", $city_id, $sql);
        $leave_type = "'".$leave_type."'";
        $sql = str_replace("%replace_leave_type%", $leave_type, $sql);
        $search_result_data = DB::select($sql);

        return view("test", [
            "variable" => $search_result_data
        ]);
    }
}
