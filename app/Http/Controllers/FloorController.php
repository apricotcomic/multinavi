<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\FloorCoordinate;
use App\Models\FloorData;
use App\Services\FloorService;
use App\Services\FloorShopBind;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FloorController extends Controller
{
    private $floorservice;

    public function __construct(FloorService $floor_service)
    {
        $this->floorservice = $floor_service;
    }

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
                $join->on('floor_coordinates.id', '=', 'floor_data.floor_coordinate_id')
                    ->where('floor_coordinates.landmark_coordinate_id', '=', $landmark_coordinate_id)
                    ->where('floor_coordinates.db_key', '=', Auth::user()->db_key);
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
            //
            $floor_coordinate = new floorCoordinate();
            $floor_data = new floorData();
            $this->floorservice->writedata($request,$floor_coordinate,$floor_data);
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
                $join->on('floor_coordinates.id', '=', 'floor_data.floor_coordinate_id')
                    ->where('floor_coordinates.id', '=', $id)
                    ->where('floor_coordinates.db_key', '=', Auth::user()->db_key);
            })
            ->first();

        $shops = DB::table('shop_data')
            ->join('floor_shop_binds', function($join) use($floor) {
                $join->on('shop_data.id', '=', 'floor_shop_binds.shop_data_id')
                    ->where('shop_data.db_key', '=', Auth::user()->db_key);
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
            $join->on('floor_coordinates.id', '=', 'floor_data.floor_coordinate_id')
                ->where('floor_coordinates.id', '=', $id)
                ->where('floor_coordinates.db_key', '=', Auth::user()->db_key);
            })
        ->first();

        $shops = DB::table('shop_coordinates')
            ->join('shop_data', function($join) use($floor) {
                $join->on('shop_coordinates.id', '=', 'shop_data.shop_coordinate_id')
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
            //
            $floor_coordinate = FloorCoordinate::find($id);
            $floor_data = FloorData::where('floor_coordinate_id', $id)->first();
            $this->floorservice->writedata($request,$floor_coordinate,$floor_data);
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
