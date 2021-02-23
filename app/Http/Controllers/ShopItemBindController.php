<?php

namespace App\Http\Controllers;

use App\Models\CustomerLandmarkBind;
use App\Models\ItemData;
use App\Models\ShopCoordinate;
use App\Models\ShopItemBind;
use App\Models\ShopData;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ShopItemBindController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $customer_id = Auth::user()->customer_id;
        $landmark_coordinate_id = CustomerLandmarkBind::where('customer_id', $customer_id)->first();
        $shops = DB::table('shop_coordinates')
            ->join('shop_data', function($join) use($landmark_coordinate_id) {
                $join->on('shop_coordinates.id', '=', 'shop_data.shop_coordinate_id')
                    ->where('shop_coordinates.landmark_coordinate_id', '=', $landmark_coordinate_id);
            })
            ->get();
        return view('shopitembind.index', compact('landmark_coordinate_id', 'shops'));
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
        $shop = ShopData::find($id);

        $items = DB::table('shop_item_binds')
            ->join('item_data', function($join) use($id) {
                $join->on('shop_item_binds.item_id', '=', 'item_data.id')
                    ->where('shop_item_binds.shop_id', '=', $id);
            })
            ->get();
        /* TODO 商品を二次元配列で表示する
        foreach ($items as $item) {
            $i = 0;
            $itemarray = [ $i=>$item->item_name ];
            if ($i = 4) {
                $i = 0;
            } else {
                $i++;
            }
        }

        if ($i<>0) {
            for ($j=$i; $j>4; $j++) {
                $itemarray = [ $j=>'a'];
            }
        }
        */
        return view('shopitembind/show', compact('shop', 'items'));
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $shop = ShopData::find($id);

        $items = ItemData::all();

        $checked[] = null;

        foreach ($items as $item) {
            $find = ShopItemBind::where('shop_id', $id)
                ->where('item_id', $item->id)->first();
            if (empty($find)) {
                $checked[$item->id] = '';
            } else {
                $checked[$item->id] = 'checked="checked"';
            }
        }

        /* TODO 商品を二次元配列で表示する
        foreach ($items as $item) {
            $i = 0;
            $itemarray = [ $i=>$item->item_name ];
            if ($i = 4) {
                $i = 0;
            } else {
                $i++;
            }
        }

        if ($i<>0) {
            for ($j=$i; $j>4; $j++) {
                $itemarray = [ $j=>'a'];
            }
        }
        */
        return view('shopitembind/edit', compact('shop', 'items', 'checked'));
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
            return redirect()->route('shopitembind.show',$id);
        } else {
            $chks = $request->input('chk');
            $checkeds = $request->input('checked');
            $ides = $request->input('item_id');
            foreach ((array)$checkeds as $index => $checked) {
                $check_data = $checked;
                if ($check_data == 'checked="checked"') {
                    $flg_on = true;
                } else {
                    $flg_on = false;
                }
                if (empty($chks)) {
                    $newchk = false;
                } else {
                    if(in_array($index+1,$chks)) {
                        $newchk = true;
                    } else {
                        $newchk = false;
                    }
                }
                if ($newchk == true) {
                    if ($flg_on == false) {
                        $shop_item_bind = new ShopItemBind;
                        $shop_item_bind->shop_id = $id;
                        $shop_item_bind->item_id = $index+1;
                        $shop_item_bind->save();
                    }
                } else {
                    if ($flg_on == true) {
                        $shop_item_bind = ShopItemBind::where('shop_id', $id)
                        ->where('item_id', $index+1)
                        ->first();
                        $shop_item_bind->delete();
                    }
                }
            }
        }
        return redirect()->route('shopitembind.show',$id);
    }

}
