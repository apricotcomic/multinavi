<?php

namespace App\Http\Controllers;

use App\Models\ItemData;
use Illuminate\Http\Request;

class ItemDataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $items = ItemData::all();
        return view('itemdata.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('itemdata.create');
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
            return redirect()->route('itemdata.index');
        } else {
            // item data insert
            $itemdata = new ItemData();
            $itemdata->item_name = $request->item_name;
            $itemdata->large_classification = $request->large_classification;
            $itemdata->middle_classification = $request->middle_classification;
            $itemdata->small_classification = $request->small_classification;
            $itemdata->about = $request->about;
            $itemdata->save();
            return redirect()->route('itemdata.index');
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
        $item = ItemData::find($id);
        return view('itemdata/show', compact('item'));

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
        $item = ItemData::find($id);
        return view('itemdata/edit', compact('item'));
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
            return redirect()->route('itemdata.index');
        } else {
            // item data insert
            $itemdata = ItemData::find($id);
            $itemdata->item_name = $request->item_name;
            $itemdata->large_classification = $request->large_classification;
            $itemdata->middle_classification = $request->middle_classification;
            $itemdata->small_classification = $request->small_classification;
            $itemdata->about = $request->about;
            $itemdata->save();
            return redirect()->route('itemdata.index');
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
        $item = ItemData::find($id);
        $item->delete();
        return redirect()->route('itemdata.index');
    }
}
