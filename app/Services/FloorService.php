<?php

namespace App\Services;

use Auth;
use Exception;
use Log;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FloorService {
    public function writedata(Request $request,$floor_coordinate,$floor_data)
    {
        DB::connection('contents_ja')->beginTransaction();
        // floor_coordinates
        try {
            $floor_coordinate->db_key = Auth::user()->db_key;
            $floor_coordinate->landmark_coordinate_id = $request->landmark_coordinate_id;
            $floor_coordinate->x1_coordinate = $request->x1;
            $floor_coordinate->x2_coordinate = $request->x2;
            $floor_coordinate->y1_coordinate = $request->y1;
            $floor_coordinate->y2_coordinate = $request->y2;
            $floor_coordinate->z_coordinate = $request->z;
            $floor_coordinate->start_date = $request->start_date;
            $floor_coordinate->end_date = $request->end_date;
            $floor_coordinate->save();
        // floor_data
            $floor_data->db_key = Auth::user()->db_key;
            $floor_data->landmark_coordinate_id = $request->landmark_coordinate_id;
            $floor_data->floor_coordinate_id = $floor_coordinate->id;
            $floor_data->floor_name = $request->name;
            $floor_data->floor_mapfile = $request->file('file')->getClientOriginalName();
            $floor_data->start_date = $request->start_date;
            $floor_data->end_date = $request->end_date;
            $floor_data->save();
        // map
            $file_path = $request->landmark_coordinate_id . '/floor';
            $request->file('file')->storeAs($file_path,$floor_data->floor_mapfile,'public');
        // commit
            DB::connection('contents_ja')->commit();
        } catch (Exception $e) {
            DB::connection('contents_ja')->rollback();
            Log::debug('message:'.'floor table write error'.
                        ' exception:'.$e);
        }

    }
}
