<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ItemDetails;
use App\Models\ItemCategories;
use App\Models\Unit;

use Illuminate\Support\Facades\DB;

class FacultyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $item_details = ItemDetails::with('category')->get();
        $item_categories = ItemCategories::with('detail')->get();
        // dd(array($item_details,$item_categories));

        return view('faculty.dashboard',compact('item_details','item_categories'));
    }

    public function search(Request $request)
    {
        $search = $request->get('search');

        $item_details = ItemDetails::all();
        $item_categories= ItemCategories::all();

        $posts = ItemDetails::where('description','like','%'.$search.'%') -> get();
        // $posts_id = $posts::where('category_id')->get();

        // $post_datas = $posts->toArray();
        return view('faculty.dashboard', ['post' => $posts], compact('item_details','item_categories', 'posts'));
        
        
    }

    // Filtering Category ID Data
    public function get_causes_against_category($id){

        //  $data =  DB::table('item_details as sub_cat')->selectRaw('(Select  category_name from item_details where id = sub_cat.id) as cat_name,  (Select price_catalogue from item_details where id = sub_cat.category_id) as cat_price,  (Select unit_name from item_details where id = sub_cat.category_id) as cat_unit')->whereRaw('category_id IN ('.$id.')')->get();   
        //  echo json_encode($data);

         $query = DB::table('item_details as sub_cat')
                ->leftjoin('item_categories as item_cat', 'item_cat.id', '=', 'sub_cat.category_id');
         $output = $query->select(['sub_cat.description as cat_name','sub_cat.price_catalogue as cat_price','sub_cat.unit_name as cat_unit','item_cat.description as description'])->whereRaw('category_id IN ('.$id.')')->get();  
         

         echo json_encode($output);

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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        //

        $item_details = ItemDetails::with('category')->get();
        $item_categories = ItemCategories::with('detail')->get();

        $id = $request->id;
        $show_items = Itemdetails::where('id', $id)->get();

        $units = Unit::all();

        // dd($show_items);
        return view('faculty.order-details', compact('item_details','item_categories', 'show_items', 'units'));


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
    public function update(Request $request, $id)
    {
        //
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






}
