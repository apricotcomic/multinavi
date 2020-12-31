<?php

namespace App\Services;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ShopService {
    public function writedata(Request $request,$shop_coordinate,$shop_data)
    {
        DB::connection('location')->beginTransaction();
        DB::connection('contents_ja')->beginTransaction();
        // floor_coordinates
        try {
            // shop_coordinates insert
            $shop_coordinate->landmark_coordinate_id = $request->landmark_coordinate_id;
            $shop_coordinate->floor_coordinate_id = $request->floor_coordinate_id;
            $shop_coordinate->x1_coordinate = $request->x1;
            $shop_coordinate->x2_coordinate = $request->x2;
            $shop_coordinate->y1_coordinate = $request->y1;
            $shop_coordinate->y2_coordinate = $request->y2;
            $shop_coordinate->x_point_coordinate = $request->x_point;
            $shop_coordinate->y_point_coordinate = $request->y_point;
            $shop_coordinate->start_date = $request->start_date;
            $shop_coordinate->end_date = $request->end_date;
            $shop_coordinate->save();
            // shop_data insert
            $shop_data->shop_coordinate_id = $shop_coordinate->id;
            $shop_data->shop_name = $request->name;
            $shop_data->about = $request->about;
            $shop_data->save();
            // commit
            DB::connection('location')->commit();
            DB::connection('contents_ja')->commit();
        } catch (Exception $e) {
            DB::connection('location')->rollback();
            DB::connection('contents_ja')->rollback();
        }
    }
}
