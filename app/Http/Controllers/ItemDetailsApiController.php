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

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ItemDetails  $itemDetails
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $item_details_api)
    {
        //UPDATE
        // return response()->json($request);
        // $userId = $request->session()->get('login');
        $userId = 1;
        $item_details = ItemDetails::find($item_details_api);

        $prevState = json_encode($item_details);
        $item_details->category_id = $request->category_id;
        $item_details->description = $request->description;
        $item_details->article = $request->article;
        $item_details->unit_id = $request->unit_id;
        $item_details->price_catalogue = $request->price_catalogue;
        $item_details->is_approved = $request->submit_mode === "saveAndApprove" ? 1 : 0;
        $item_details->approved_by = $request->submit_mode === "saveAndApprove" ? $userId : 0;
        $afterState = json_encode($item_details);
        DB::beginTransaction();
        try {
            if ($item_details->save()) {
                if (UserHelpers::recordItemHistory($userId, $item_details_api, $prevState, $afterState)) {
                    DB::commit();
                    return response()->json([
                        "success" => true,
                        "message" => "Item change saved and approved."
                    ], 200);
                } else {
                    DB::rollBack();
                    return response()->json([
                        "success" => false,
                        "message" => "Item changed are not saved and not approved."
                    ], 400);
                }
            }
        } catch (Throwable $e) {
            DB::rollBack();
            return response()->json([
                "success" => false,
                "message" => "Item changed are not saved and not approved."
            ], 400);
        }
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
