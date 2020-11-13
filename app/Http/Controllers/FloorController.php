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
    public function index($floor_id)
    {
        //
        $floor = DB::table('location.floor_coordinates')
            ->join('floor_data', function($join) use($floor_id) {
                $join->on('floor_coordinates.id', '=', 'floor_coordinate_id')
                    ->where('floor_coordinates.landmark_coordinate_id', '=', $floor_id);
            })
            ->get();
        return view('floor/index', compact('floor'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        $floor = DB::table('location.floor_coordinates')
            ->join('floor_data', function($join) use($id) {
                $join->on('floor_coordinates.id', '=', 'floor_coordinate_id')
                    ->where('floor_coordinates.id', '=', $id);
            })
            ->first();

        $shops = DB::table('location.shop_coordinates')
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
    }
}
