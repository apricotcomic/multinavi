<?php

namespace App\Http\Controllers;

use App\Models\FloorCoordinate;
use App\Models\FloorData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LandmarkFloorController extends Controller
{
    //
    public function landmarkfloor($landmark_id)
    {
        $floors = DB::table('location.floor_coordinates')
            ->join('floor_data', function($join) use($landmark_id) {
                $join->on('location.floor_coordinates.id', '=', 'floor_coordinate_id')
                    ->where('location.floor_coordinates.landmark_coordinate_id', '=', $landmark_id);
            })
            ->get();
        return view('landmarkfloor/index', compact('floors'));
    }
}
