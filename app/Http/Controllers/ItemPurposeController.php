<?php

namespace App\Http\Controllers;

use App\Models\ItemPurpose;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Throwable;

class ItemPurposeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        try {
            DB::beginTransaction();
            $itemPurposes = ItemPurpose::all();
            return view('admin/manage-item-purpose')->with('purposes', $itemPurposes);
        } catch (Throwable $e) {
            DB::rollBack();
            return view('admin/manage-item-purpose')->with('error_message', 'Item purposes cannot be fetched. Please try again or contact website administrator!');
        }
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
        try {
            $validator = Validator::make($request->all(), [
                'purpose' => 'required',
            ]);

            if ($validator->fails()) {
                $errors = $validator->errors();
                return redirect()->back()->withErrors($errors);
            }

            $newPurpose = new ItemPurpose();
            $newPurpose->purpose = $request->purpose;

            DB::beginTransaction();
            if ($newPurpose->save()) {
                DB::commit();
                $itemPurposes = ItemPurpose::all();
                return redirect()->back()->with('purposes', $itemPurposes);
            } else {
                DB::rollBack();
                return redirect()->back()->with('error_message', 'Something went wrong. Record is not saved.');
            }
        } catch (Throwable $e) {
            DB::rollBack();
            return redirect()->back()->with('error_message', 'Something went wrong. Record is not saved.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ItemPurpose  $itemPurpose
     * @return \Illuminate\Http\Response
     */
    public function show(ItemPurpose $itemPurpose)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ItemPurpose  $itemPurpose
     * @return \Illuminate\Http\Response
     */
    public function edit(ItemPurpose $itemPurpose)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ItemPurpose  $itemPurpose
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ItemPurpose $itemPurpose)
    {
        //
        try {
            $validator = Validator::make($request->all(), [
                'purpose' => 'required',
            ]);

            if ($validator->fails()) {
                $errors = $validator->errors();
                return redirect()->back()->withErrors($errors);
            }

            $itemPurpose->purpose = $request->purpose;

            DB::beginTransaction();
            if ($itemPurpose->save()) {
                DB::commit();
                $itemPurposes = ItemPurpose::all();
                return redirect()->back()->with('purposes', $itemPurposes);
            } else {
                DB::rollBack();
                return redirect()->back()->with('error_message', 'Something went wrong. Record changes is not saved.');
            }
        } catch (Throwable $e) {
            DB::rollBack();
            return redirect()->back()->with('error_message', 'Something went wrong. Record changes is not saved.');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ItemPurpose  $itemPurpose
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //
        try {
            $err = 0;
            DB::beginTransaction();
            foreach ($request->id as $purpose_id) {
                $unit = ItemPurpose::find($purpose_id);
                if (!$unit->delete()) {
                    $err += 1;
                }
            }

            if ($err <= 0) {
                DB::commit();
                $itemPurposes = ItemPurpose::all();
                return redirect()->back()->with('purposes', $itemPurposes);
            } else {
                return redirect()->back()->with('error_message', 'Something went wrong. Records not deleted.');
            }
        } catch (Throwable $e) {
            DB::rollBack();
            return redirect()->back()->with('error_message', 'Something went wrong. Records not deleted.');
        }
    }
}
