<?php

namespace App\Http\Controllers;

use App\Models\LandmarkCoordinate;
use App\Models\LandmarkData;
use App\Services\LandmarkService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LandmarkController extends Controller
{

    private $landmarkservice;

    public function __construct(LandmarkService $landmark_service)
    {
        $this->landmarkservice = $landmark_service;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $landmarks = DB::table('location.landmark_coordinates')
            ->join('landmark_data', 'landmark_coordinates.id', '=', 'landmark_data.landmark_coordinate_id')
            ->get();
        return view('landmark/index', compact('landmarks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('landmark.create');
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
            return redirect()->route('landmark.index');
        } else {
            $landmark_coordinate = new LandmarkCoordinate();
            $landmark_data = new LandmarkData();
            $this->landmarkservice->writedata($request,$landmark_coordinate,$landmark_data);
            return redirect()->route('landmark.index');
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
        $landmark = DB::table('location.landmark_coordinates')
            ->join('landmark_data', function($join) use($id) {
                $join->on('landmark_coordinates.id', '=', 'landmark_coordinate_id')
                    ->where('landmark_coordinates.id', '=', $id);
            })
            ->first();
        return view('landmark/show', compact('landmark'));
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
        $landmark = DB::table('location.landmark_coordinates')
            ->join('landmark_data', function($join) use($id) {
                $join->on('landmark_coordinates.id', '=', 'landmark_coordinate_id')
                    ->where('landmark_coordinates.id', '=', $id);
            })
            ->first();
        return view('landmark/edit', compact('landmark','id'));
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
            return redirect()->route('landmark.index');
        } else {
            $landmark_coordinate = LandmarkCoordinate::find($id);
            $landmark_data = LandmarkData::find($id);
            $this->landmarkservice->writedata($request,$landmark_coordinate,$landmark_data);
            return redirect()->route('landmark.index');
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
        $landmark_coordinate = LandmarkCoordinate::find($id);
        $landmark_coordinate->delete();
        $landmark_data = LandmarkData::find($id);
        $landmark_data->delete();
        return redirect()->route('landmark.index');
    }
}
