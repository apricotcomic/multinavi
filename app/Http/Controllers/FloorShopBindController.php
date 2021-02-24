<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FloorShopBindController extends Controller
{
    //
    public function edit($id)
    {
        //
        $floor = DB::table('floor_coordinates')
        ->join('floor_data', function($join) use($id) {
            $join->on('floor_coordinates.id', '=', 'floor_data.floor_coordinate_id')
                ->where('floor_coordinates.id', '=', $id)
                ->where('floor_coordinates.db_key', '=', Auth::user()->db_key);
        })
        ->first();

        $shops = DB::table('shop_data')
        ->select('shop_data.*','floor_shop_binds.floor_coordinate_id')
        ->leftjoin('floor_shop_binds', function($join) {
            $join->on('shop_data.id', '=', 'floor_shop_binds.shop_data_id')
                ->where('shop_data.db_key', '=', Auth::user()->db_key);
        })
        ->get();

        return view('floorshopbind/edit', compact('floor', 'shops'));

    }
}
