<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class cemeteryidController extends Controller
{
    public function publicCemId($id) {
        $sql = "SELECT
                    fs.serviceName,
                    fs.chargeCrite
                FROM
                    facility_service AS fs
                WHERE
                    fs.cemetery_id = %replace_later%";
        $sql = str_replace("%replace_later%", $id, $sql);
        $price_data = DB::select($sql);

        return view("publicCemId", [
            'variable' => $price_data
        ]);
    }

    public function undertakerId($id) {
        $sql = "SELECT
                    fs.serviceName,
                    fs.chargeCrite
                FROM
                    facility_service AS fs
                WHERE
                    fs.cemetery_id = %replace_later%";
        $sql = str_replace("%replace_later%", $id, $sql);
        $price_data = DB::select($sql);

        return view("undertakerId", [
            'variable' => $price_data
        ]);
    }

    public function fireplaceId($id) {
        $sql = "SELECT
                    fs.serviceName,
                    fs.chargeCrite
                FROM
                    facility_service AS fs
                WHERE
                    fs.cemetery_id = %replace_later%";
        $sql = str_replace("%replace_later%", $id, $sql);
        $price_data = DB::select($sql);

        return view("fireplaceId", [
            'variable' => $price_data
        ]);
    }

    public function pagodaId($id) {
        $sql = "SELECT
                    fs.serviceName,
                    fs.chargeCrite
                FROM
                    facility_service AS fs
                WHERE
                    fs.cemetery_id = %replace_later%";
        $sql = str_replace("%replace_later%", $id, $sql);
        $price_data = DB::select($sql);

        return view("pagodaId", [
            'variable' => $price_data
        ]);
    }

    public function customizedSearchId($id) {
        $sql = "SELECT
                    fs.serviceName,
                    fs.chargeCrite
                FROM
                    facility_service AS fs
                WHERE
                    fs.cemetery_id = %replace_later%";
        $sql = str_replace("%replace_later%", $id, $sql);
        $price_data = DB::select($sql);

        return view("customizedSearchResultId", [
            'variable' => $price_data
        ]);
    }
}
