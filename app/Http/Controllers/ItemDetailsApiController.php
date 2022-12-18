<?php

namespace App\Http\Controllers;

use App\Models\ItemDetails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Helpers\UserHelpers;

use Throwable;

class ItemDetailsApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Models\ItemDetails  $itemDetails
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        try {
            $item = ItemDetails::has('category')->where('item_details.id', '=', $id)->leftJoin('users', 'users.id', '=', 'item_details.added_by')->leftJoin('user_profiles', 'user_profiles.id', '=', 'users.profiles_id')->leftJoin('branches', 'branches.id', '=', 'users.branch_id')->select('item_details.*', 'user_profiles.first_name', 'user_profiles.middle_initial', 'user_profiles.last_name', 'branches.branch_name')->get();
            if (count($item) === 0) {
                return response()->json([
                    'success' => false,
                    'message' => 'Item not found.'
                ], 404);
            }
            return response()->json([
                'success' => true,
                'message' => 'Success',
                'data' => $item
            ], 200);
        } catch (Throwable $e) {
            return response()->json([
                'success' => false,
                'message' => $e
            ], 400);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ItemDetails  $itemDetails
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        //
        //UPDATE
        $item_details = ItemDetails::find($request->id);
        $prevState = json_encode($item_details);
        $item_details->category_id = $request->input('category_id');
        $item_details->description = $request->input('description');
        $item_details->article = $request->input('article');
        $item_details->unit_id = $request->input('unit_id');
        $item_details->price_catalogue = $request->input('price_catalogue');

        // $item_details->save();

        // return redirect('/admin/manage-item-details')->with('success_update', 'Descriptions created successfully');

        $afterState = json_encode($item_details);
        try {
            DB::beginTransaction();

            if ($item_details->save()) {
                $userId = $request->session()->get('login');
                if (UserHelpers::recordItemHistory($userId, $request->id, $prevState, $afterState)) {
                    DB::commit();
                    return redirect('/admin/manage-item-details')->with('success', 'Descriptions created successfully');
                } else {
                    DB::rollBack();
                    return redirect()->back();
                }
            } else {
                DB::rollBack();
                return redirect()->back();
            }
        } catch (Throwable $e) {
            DB::rollBack();
            return redirect()->back();
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ItemDetails  $itemDetails
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ItemDetails $itemDetails)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ItemDetails  $itemDetails
     * @return \Illuminate\Http\Response
     */
    public function destroy(ItemDetails $itemDetails)
    {
        //
    }
}
