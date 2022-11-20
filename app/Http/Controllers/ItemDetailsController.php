<?php

namespace App\Http\Controllers;
use App\Models\ItemDetails;
use App\Models\ItemCategories;
use App\Models\Unit;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ItemDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //INDEX
        $item_details = ItemDetails::all();
        $item_categories = ItemCategories::all();
        $unit = Unit::all();
        return view('admin.manage-item-details',compact('item_details', 'item_categories','unit'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //STORE
        $request -> validate([
            'category_id' => 'required',
            'description' => 'required',
            'price_catalogue' => 'required',
            'unit_id' => 'required',
            'article' => 'required',
            'category_name' => 'required',
            'unit_name' => 'required'
        ]);

        ItemDetails::create($request->all());

        return redirect()->back();
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
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //UPDATE
        $item_category = ItemCategories::find($request->id);
        $item_details = ItemDetails::find($request->id);

        $item_details->description = $request->input('description');
        $item_details->category_name = $request->input('category_name');
        $item_details->article = $request->input('article');
        $item_details->price_catalogue = $request->input('price_catalogue');
        $item_details->save();
        
        return redirect('/admin/manage-item-details') -> with('success','Descriptions created successfully');
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
    }

    public function deleteCateg(Request $request)
    {
        $ids = $request->ids;
        ItemDetails::whereIn('id',$ids)->delete();
        
        return redirect()->back();
    }
}
