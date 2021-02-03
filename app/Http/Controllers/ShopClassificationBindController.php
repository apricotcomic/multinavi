<?php

namespace App\Http\Controllers;

use App\Models\Classification;
use App\Models\ShopClassificationBind;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ShopClassificationBindController extends Controller
{
    //
    public function show($id)
    {
        //
        $shop = DB::table('shop_coordinates')
            ->join('shop_data', function($join) use($id) {
                $join->on('shop_coordinates.id', '=', 'shop_data.shop_coordinate_id')
                    ->where('shop_coordinates.id', '=', $id);
            })
            ->first();
        $classifications = DB::table('shop_classification_binds')
            ->join('shop_data', function($join) use($id) {
                $join->on('shop_classification_binds.shop_id', '=', 'shop_data.shop_coordinate_id')
                    ->where('shop_classification_binds.shop_id', '=', $id);
            })
            ->get();

        return view('shopclassificationbind/show', compact('shop', 'classifications'));
    }

    //
    public function edit()
    {
        //
        $classifications = Classification::all();
        dd($classifications);
        return view('shopclassificationbind/edit', compact('classifications'));
    }
}
