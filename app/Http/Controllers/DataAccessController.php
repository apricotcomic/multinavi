<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DataAccessController extends Controller
{
    //
    public function shopall()
    {
    $shops = DB::table('shop_data')
        ->select('shop_data.*','floor_shop_binds.floor_coordinate_id')
        ->leftjoin('floor_shop_binds', function($join) {
            $join->on('shop_data.id', '=', 'floor_shop_binds.shop_data_id')
                ->where('shop_data.db_key', '=', Auth::user()->db_key);
        })
        ->get();

        return $shops;
    }
}
