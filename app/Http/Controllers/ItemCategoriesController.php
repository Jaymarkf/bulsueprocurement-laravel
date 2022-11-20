<?php

namespace App\Http\Controllers;
use App\Models\ItemCategories;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ItemCategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //INDEX
        $item_categories = ItemCategories::all();
        return view('admin.manage-item-cat',compact('item_categories'));
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
            'description' => 'required'
        ]);

        ItemCategories::create($request->all());

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
        $item_category = ItemCategories::find( $request-> id);
        $item_category->description = $request->input('description');
        $item_category->save();
        
        
        return redirect('/admin/manage-item-category') -> with('success','Descriptions created successfully');
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
        ItemCategories::whereIn('id',$ids)->delete();
        return redirect()->back();
    }

}
