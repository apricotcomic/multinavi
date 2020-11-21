<?php

namespace App\Http\Controllers;

use App\Models\FloorCoordinate;
use App\Models\FloorData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FloorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($landmark_coordinate_id)
    {
        //
        $floors = DB::table('floor_coordinates')
            ->join('floor_data', function($join) use($landmark_coordinate_id) {
                $join->on('floor_coordinates.id', '=', 'floor_coordinate_id')
                    ->where('floor_coordinates.landmark_coordinate_id', '=', $landmark_coordinate_id);
            })
            ->get();
        return view('floor/index', compact('landmark_coordinate_id', 'floors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($landmark_coordinate_id)
    {
        //
        return view('floor.create', ['landmark_coordinate_id' => $landmark_coordinate_id]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        if($request->action === 'back') {
            return redirect()->route('floor.index');
        } else {
            // floor_coordinates insert
            $floor_coordinate = new floorCoordinate();
            $floor_coordinate->landmark_coordinate_id = $request->landmark_coordinate_id;
            $floor_coordinate->x1_coordinate = $request->x1;
            $floor_coordinate->x2_coordinate = $request->x2;
            $floor_coordinate->y1_coordinate = $request->y1;
            $floor_coordinate->y2_coordinate = $request->y2;
            $floor_coordinate->z_coordinate = $request->z;
            $floor_coordinate->save();
            // floor_data insert
            $floor_data = new floorData();
            $floor_data->floor_coordinate_id = $floor_coordinate->id;
            $floor_data->floor_name = $request->name;
            $floor_data->floor_mapfile = $request->file;
            $floor_data->save();
            return redirect()->route('floor.index', ['landmark_coordinate_id' => $request->landmark_coordinate_id]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $floor = DB::table('floor_coordinates')
            ->join('floor_data', function($join) use($id) {
                $join->on('floor_coordinates.id', '=', 'floor_coordinate_id')
                    ->where('floor_coordinates.id', '=', $id);
            })
            ->first();

        $shops = DB::table('shop_coordinates')
            ->join('shop_data', function($join) use($floor) {
                $join->on('shop_coordinates.id', '=', 'shop_coordinate_id')
                    ->where('shop_coordinates.floor_coordinate_id', '=', $floor->id);
            })
            ->get();
        return view('floor/show', compact('floor', 'shops'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $floor = DB::table('floor_coordinates')
        ->join('floor_data', function($join) use($id) {
            $join->on('floor_coordinates.id', '=', 'floor_coordinate_id')
                ->where('floor_coordinates.id', '=', $id);
        })
        ->first();

        $shops = DB::table('shop_coordinates')
            ->join('shop_data', function($join) use($floor) {
                $join->on('shop_coordinates.id', '=', 'shop_coordinate_id')
                    ->where('shop_coordinates.floor_coordinate_id', '=', $floor->id);
            })
            ->get();
        return view('floor/edit', compact('floor', 'shops'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        if($request->action === 'back') {
            return redirect()->route('floor.index');
        } else {
            // floor_coordinates insert
            $floor_coordinate = FloorCoordinate::find($id);
            $floor_coordinate->x1_coordinate = $request->x1;
            $floor_coordinate->x2_coordinate = $request->x2;
            $floor_coordinate->y1_coordinate = $request->y1;
            $floor_coordinate->y2_coordinate = $request->y2;
            $floor_coordinate->z_coordinate = $request->z;
            $floor_coordinate->save();
            // floor_data insert
            $floor_data = FloorData::where('floor_coordinate_id', $id)->first();
            $floor_data->floor_name = $request->name;
            $floor_data->floor_mapfile = $request->file;
            $floor_data->save();
            return redirect()->route('floor.index', ['landmark_coordinate_id' => $floor_coordinate->landmark_coordinate_id]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $floor_coordinate = FloorCoordinate::find($id);
        $landmark_coordinate_id = $floor_coordinate->landmark_coordinate_id;
        $floor_coordinate->delete();
        $floor_data = FloorData::find($id);
        $floor_data->delete();
        return redirect()->route('floor.index', ['landmark_coordinate_id' => $landmark_coordinate_id]);

    }
}
