<?php

namespace App\Services;

use Illuminate\Http\Request;

class FloorService {
    public function writedata(Request $request,$floor_coordinate,$floor_data)
    {
        // floor_coordinates
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
        $floor_data->floor_coordinate_id = $floor_coordinate->id;
        $floor_data->floor_name = $request->name;
        $floor_data->floor_mapfile = $request->file;
        $floor_data->save();

    }
}
