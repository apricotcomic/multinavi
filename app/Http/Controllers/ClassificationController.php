<?php

namespace App\Http\Controllers;

use App\Models\classification;
use Illuminate\Http\Request;

class ClassificationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $classifications = Classification::all();
        return view('classification/index', compact('classifications'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('classification.create');
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
            return redirect()->route('classification.index');
        } else {
            // landmark_coordinates insert
            $classification = new Classification();
            $classification->large_classification = $request->large_classification;
            $classification->large_classification_name = $request->large_classification_name;
            $classification->middle_classification = $request->middle_classification;
            $classification->middle_classification_name = $request->middle_classification_name;
            $classification->small_classification = $request->small_classification;
            $classification->small_classification_name = $request->small_classification_name;
            $classification->save();
            return redirect()->route('classification.index');
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
        $classification = Classification::find($id);
        return view('classification/show', compact('classification'));
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
        $classification = Classification::find($id);
        return view('classification/edit', compact('classification'));
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
            // landmark_coordinates insert
            $classification = Classification::find($id);
            $classification->large_classification = $request->large_classification;
            $classification->large_classification_name = $request->large_classification_name;
            $classification->middle_classification = $request->middle_classification;
            $classification->middle_classification_name = $request->middle_classification_name;
            $classification->small_classification = $request->small_classification;
            $classification->small_classification_name = $request->small_classification_name;
            $classification->save();
            return redirect()->route('classification.index');
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
        $classification = Classification::find($id);
        $classification->delete();
        return redirect()->route('classification.index');
    }
}
