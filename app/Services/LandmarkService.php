<?php

namespace App\Services;

use Auth;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LandmarkService {
    public function writedata(Request $request,$landmark_coordinate,$landmark_data)
    {
        DB::connection('location')->beginTransaction();
        DB::connection('contents_ja')->beginTransaction();
        try {
            // landmark_coordinates update
            $landmark_coordinate->db_key = Auth::user()->db_key;
            $landmark_coordinate->x1_coordinate = $request->x1;
            $landmark_coordinate->x2_coordinate = $request->x2;
            $landmark_coordinate->y1_coordinate = $request->y1;
            $landmark_coordinate->y2_coordinate = $request->y2;
            $landmark_coordinate->database = $request->database;
            $landmark_coordinate->start_date = $request->start_date;
            $landmark_coordinate->end_date = $request->end_date;
            $landmark_coordinate->save();
            // landmark_data update
            $landmark_data->db_key = Auth::user()->db_key;
            $landmark_data->landmark_coordinate_id = $landmark_coordinate->id;
            $landmark_data->landmark_name = $request->name;
            $landmark_data->address = $request->address;
            $landmark_data->zip = $request->zip;
            $landmark_data->telephone_number = $request->tel;
            $landmark_data->fax_number = $request->fax;
            $landmark_data->email = $request->email;
            $landmark_data->save();
            // commit
            DB::connection('location')->commit();
            DB::connection('contents_ja')->commit();
        } catch (Exception $e) {
            DB::connection('location')->rollback();
            DB::connection('contents_ja')->rollback();
        }
    }
}
