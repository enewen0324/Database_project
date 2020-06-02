<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class navbarShowController extends Controller
{
    //
    public function showIndex() {
        return view("index");
    }

    public function showCustomizedSearch() {
        return view("customizedSearch");
    }

    public function showEtiquette($city_name) {
        if ($city_name == "all") {
            $sql = "SELECT
                        cit.city_name,
                        cit.area,
                        eti.etiquette_name,
                        eti.phone
                    FROM
                        cities AS cit,
                        etiquette AS eti
                    WHERE
                        cit.id = eti.city_id";
            $etiquette_data = DB::select($sql);
        }
        else {
            // SELECT id FROM cities WHERE name = '$city_name'
            $sql = "SELECT
                        id
                    FROM
                        cities
                    WHERE
                        city_name = '%replace_later%'";
            $sql = str_replace("%replace_later%", $city_name, $sql);
            $city_id = DB::select($sql)[0]->id; // DB::select(DB::raw($sql));

            $sql = "SELECT
                        cit.city_name,
                        cit.area,
                        eti.etiquette_name,
                        eti.phone
                    FROM
                        cities AS cit,
                        etiquette AS eti
                    WHERE
                        cit.id = %replace_later%
                        AND eti.city_id = %replace_later%
                        AND cit.id = eti.city_id";
            $sql = str_replace("%replace_later%", $city_id, $sql);
            $etiquette_data = DB::select($sql);
        }
        // return view("test", [
        //     'variable' => $etiquette_data
        // ]);
        // {{$variable[0]->phone}}
    }

    public function showUndertaker($city_name) {
        if ($city_name == "all") {
            $sql = "SELECT
                        cit.city_name,
                        cit.area,
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
                        cit.id = cem.city_id
                        AND cem.facility_type = '殯儀館'";
            $undertaker_data = DB::select($sql);
        }
        else {
            $sql = "SELECT
                        id
                    FROM
                        cities
                    WHERE
                        city_name = '%replace_later%'";
            $sql = str_replace("%replace_later%", $city_name, $sql);
            $city_id = DB::select($sql)[0]->id;

            $sql = "SELECT
                        cit.city_name,
                        cit.area,
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
                        cit.id = %replace_later%
                        AND cem.city_id = %replace_later%
                        AND cit.id = cem.city_id
                        AND cem.facility_type = '殯儀館'";
            $sql = str_replace("%replace_later%", $city_id, $sql);
            $undertaker_data = DB::select($sql);
        }
        return $undertaker_data;
    }
}
