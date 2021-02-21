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
    public function index($landmark_coordinate_id, $floor_coordinate_id)
    {
        //
        $shops = DB::table('shop_coordinates')
            ->join('shop_data', function($join) use($landmark_coordinate_id) {
                $join->on('shop_coordinates.id', '=', 'shop_data.shop_coordinate_id')
                    ->where('shop_coordinates.landmark_coordinate_id', '=', $landmark_coordinate_id)
                    ->where('shop_data.db_key', '=', Auth::user()->db_key);
            })
            ->orderby('floor_coordinate_id')
            ->get();
        return view('shop/index', compact('landmark_coordinate_id', 'floor_coordinate_id', 'shops'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $landmark_coordinate_id = $id;
        //
        $floors = DB::table('floor_coordinates')
        ->join('floor_data', function($join) use($landmark_coordinate_id) {
            $join->on('floor_coordinates.id', '=', 'floor_data.floor_coordinate_id')
                ->where('floor_coordinates.landmark_coordinate_id', '=', $landmark_coordinate_id)
                ->where('shop_data.db_key', '=', Auth::user()->db_key);
            })
        ->pluck('floor_name','floor_data.id');

        return view('shop.create', compact('landmark_coordinate_id','floors'));
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
            // shop_coordinates insert
            $shop_coordinate = new ShopCoordinate();
            $shop_coordinate->landmark_coordinate_id = $request->landmark_coordinate_id;
            $shop_coordinate->floor_coordinate_id = $request->floor_name;
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
            $shop_data = new shopData();
            $shop_data->shop_coordinate_id = $shop_coordinate->id;
            $shop_data->db_key = Auth::user()->db_key;
            $shop_data->shop_name = $request->name;
            $shop_data->about = $request->about;
            $shop_data->save();
            return redirect()->route('shop.index',
                ['landmark_coordinate_id' => $shop_coordinate->landmark_coordinate_id,
                'floor_coordinate_id' => $shop_coordinate->floor_coordinate_id,
            ]);
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
        $shop = DB::table('shop_coordinates')
            ->join('shop_data', function($join) use($id) {
                $join->on('shop_coordinates.id', '=', 'shop_data.shop_coordinate_id')
                    ->where('shop_coordinates.id', '=', $id)
                    ->where('shop_data.db_key', '=', Auth::user()->db_key);
            })
            ->first();
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
        $shop = DB::table('shop_coordinates')
        ->join('shop_data', function($join) use($id) {
            $join->on('shop_coordinates.id', '=', 'shop_data.shop_coordinate_id')
                ->where('shop_coordinates.id', '=', $id)
                ->where('shop_data.db_key', '=', Auth::user()->db_key);
        })
        ->first();

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
            // shop_coordinates insert
            $shop_coordinate = ShopCoordinate::find($id);
            $shop_coordinate->floor_coordinate_id = $request->floor;
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
            $shop_data = ShopData::where('shop_coordinate_id', $id)->first();
            $shop_data->shop_name = $request->name;
            $shop_data->about = $request->about;
            $shop_data->save();
            return redirect()->route('shop.index',
                ['landmark_coordinate_id' => $shop_coordinate->landmark_coordinate_id,
                'floor_coordinate_id' => $shop_coordinate->floor_coordinate_id,
            ]);
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
        $shop_coordinate = ShopCoordinate::find($id);
        $landmark_coordinate_id = $shop_coordinate->landmark_coordinate_id;
        $shop_coordinate->delete();
        $shop_data = ShopData::find($id);
        $shop_data->delete();
        return redirect()->route('shop.index',
            ['landmark_coordinate_id' => $shop_coordinate->landmark_coordinate_id,
            'floor_coordinate_id' => $shop_coordinate->floor_coordinate_id,
        ]);
    }
}
