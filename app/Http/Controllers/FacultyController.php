<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use App\Models\ItemDetails;
use App\Models\ItemCategories;
use App\Models\Unit;

use App\Events\NewItemDetail;
use App\Models\ItemPurpose;
use Throwable;

class FacultyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $itemDetails = ItemDetails::with('category')->get();
        $itemCategories = ItemCategories::with('detail')->get();
        // dd(array($item_details,$item_categories));

        return view('faculty.dashboard')->with(['item_details' => $itemDetails, 'item_categories' => $itemCategories]);
    }

    public function search(Request $request)
    {
        $search = $request->get('search');

        $item_details = ItemDetails::all();
        $item_categories = ItemCategories::all();

        $posts = ItemDetails::where('description', 'like', '%' . $search . '%')->get();
        // $posts_id = $posts::where('category_id')->get();

        // $post_datas = $posts->toArray();
        return view('faculty.dashboard', ['post' => $posts], compact('item_details', 'item_categories', 'posts'));
    }

    // Filtering Category ID Data
    public function get_causes_against_category($id)
    {

        //  $data =  DB::table('item_details as sub_cat')->selectRaw('(Select  category_name from item_details where id = sub_cat.id) as cat_name,  (Select price_catalogue from item_details where id = sub_cat.category_id) as cat_price,  (Select unit_name from item_details where id = sub_cat.category_id) as cat_unit')->whereRaw('category_id IN ('.$id.')')->get();   
        //  echo json_encode($data);

        $query = DB::table('item_details as sub_cat')
            ->leftjoin('item_categories as item_cat', 'item_cat.id', '=', 'sub_cat.category_id');
        $output = $query->select(['sub_cat.description as cat_name', 'sub_cat.price_catalogue as cat_price', 'sub_cat.unit_name as cat_unit', 'item_cat.description as description'])->whereRaw('category_id IN (' . $id . ')')->get();


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
        $itemCategories = ItemCategories::all();
        $units = Unit::all();

        return view('faculty/add-item-detail')->with('categories', $itemCategories)->with('units', $units);
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
        $validator = Validator::make($request->all(), [
            'category_id' => 'required|min:1|integer',
            'unit_id' => 'required|min:1|integer',
            'description' => 'required',
            'article' => 'required',
            'price_catalogue' => 'integer|min:1',
        ], [
            'category_id.min' => 'Please select a category!',
            'unit_id.min' => 'Please select a unit!',
            'price_catalogue.integer' => 'Price catalogue must be a number!',
        ]);

        if ($validator->fails()) {
            return redirect('/faculty/item-detail/add')->withErrors($validator);
        }

        $userId = $request->session()->get('login');

        $newItem = new ItemDetails();

        $newItem->category_id = $request->category_id;
        $newItem->unit_id = $request->unit_id;
        $newItem->description = $request->description;
        $newItem->article = $request->article;
        $newItem->price_catalogue = $request->pricie_catalogue;
        $newItem->added_by = $userId;
        DB::beginTransaction();
        try {
            if ($newItem->save()) {
                DB::commit();
                event(new NewItemDetail("TEST", "TEST"));
                return view('');
            }
        } catch (Throwable $e) {
            DB::rollBack();
            return view('')->with('error', $e);
        }
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
        $id = $request->id;

        $item_details = ItemDetails::with('category')->with('unit')->get();
        $item_categories = ItemCategories::with('detail')->get();
        $show_items = Itemdetails::where('id', $id)->get();
        $units = Unit::all();
        $itemPurposes = ItemPurpose::all();
        $ppmpFormat = [
            [
                "id" => "jan",
                "name" => "Jan",
            ],
            [
                "id" => "feb",
                "name" => "Feb",
            ],
            [
                "id" => "mar",
                "name" => "Mar",
            ],
            [
                "id" => "apr",
                "name" => "Apr",
            ],
            [
                "id" => "may",
                "name" => "May",
            ],
            [
                "id" => "jun",
                "name" => "Jun",
            ],
            [
                "id" => "Jul",
                "name" => "Jul",
            ],
            [
                "id" => "aug",
                "name" => "Aug",
            ],
            [
                "id" => "sep",
                "name" => "Sep",
            ],
            [
                "id" => "oct",
                "name" => "Oct",
            ],
            [
                "id" => "nov",
                "name" => "Nov",
            ],
            [
                "id" => "dec",
                "name" => "Dec",
            ],
        ];
        // return response()->json([
        //     'ppmp' => $ppmpFormat,
        //     'units' => $units
        // ]);
        // dd($show_items);
        return view('faculty.order-details', compact('item_details', 'item_categories', 'show_items', 'units', 'itemPurposes', 'ppmpFormat'));
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
