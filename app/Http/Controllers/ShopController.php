<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\FloorCoordinate;
use App\Models\FloorData;
use App\Models\ShopCoordinate;
use App\Models\ShopData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ShopController extends Controller
{
    //
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $shops = Shopdata::all();
        return view('shop/index', compact('shops'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('shop.create');
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
            return redirect()->route('shop.index');
        } else {
            // shop_data insert
            $shop_data = new shopData();
            $shop_data->db_key = Auth::user()->db_key;
            $shop_data->shop_name = $request->name;
            $shop_data->about = $request->about;
            $shop_data->start_date = $request->start_date;
            $shop_data->end_date = $request->end_date;
            $shop_data->save();
            return redirect()->route('shop.index');
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
        $shop = Shopdata::find($id);
        return view('shop/show', compact('shop'));
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
        $shop = ShopData::find($id);

        return view('shop/edit', compact($shop->shop_coordinate_id, 'shop'));
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
            return redirect()->route('shop.index');
        } else {
            // shop_data insert
            $shop_data = ShopData::find($id);
            $shop_data->shop_name = $request->name;
            $shop_data->about = $request->about;
            $shop_data->save();
            return redirect()->route('shop.index');
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
        $shop_data = ShopData::find($id);
        $shop_data->delete();
        return redirect()->route('shop.index');
    }
}
