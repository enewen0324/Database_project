<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class testShowController extends Controller
{
    public function showTestSearch() {
        return view("testSearch");
    }

    public function result(Request $request) {
        $all_data = $request->all();
        $religion = strval($all_data["religion"]);
        $trans = strval($all_data["trans"]);
        $silent = strval($all_data["silent"]);
        $geo = strval($all_data["geo"]);

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
                    cem.email
                FROM
                    cities AS cit,
                    cemetery AS cem,
                    facility_service AS fs,
                    test AS t
                WHERE
                    cit.id = cem.city_id
                    AND cem.id = fs.cemetery_id 
                    AND fs.service_id = t.service_id 
                    AND t.religion = %replace_religion%
                    AND t.trans = %replace_trans% 
                    AND t.silent = %replace_silent%  
                    AND t.geo = %replace_geo%";

        $religion = "'".$religion."'";
        $sql = str_replace("%replace_religion%", $religion, $sql);
        $trans = "'".$trans."'";
        $sql = str_replace("%replace_trans%", $trans, $sql);
        $silent = "'".$silent."'";
        $sql = str_replace("%replace_silent%", $silent, $sql);
        $geo = "'".$geo."'";
        $sql = str_replace("%replace_geo%", $geo, $sql);
        $test_result_data = DB::select($sql);

        return view("testResult", [
            "variable" => $test_result_data
        ]);
    }
}
