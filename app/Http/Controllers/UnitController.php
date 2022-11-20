<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use App\Models\Unit;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Throwable;

class UnitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $units = Unit::all();
        return view('admin/manage-units')->with('units', $units);
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
        $validator = Validator::make($request->all(), [
            'uom' => 'required'
        ]);

        if ($validator->fails()) {
            $errors = $validator->errors();
            return redirect()->back()->withErrors($errors);
        }

        $unit = new Unit();
        $unit->uom = $request->uom;

        if ($unit->save()) {
            $unit = Unit::all();
            return redirect()->back()->with('Unit', $unit);
        } else {
            return redirect()->back()->with('error_message', 'Something went wrong. Record is not saved.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Unit  $unit
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $unit = Unit::find($id);
        return view('admin/manage-edit-units')->with('unit', $unit);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Unit  $unit
     * @return \Illuminate\Http\Response
     */
    public function edit(Unit $unit)
    {
        //

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Unit  $unit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $validator = Validator::make($request->all(), [
            'uom' => 'required'
        ]);

        if ($validator->fails()) {
            $errors = $validator->errors();
            return redirect()->back()->withErrors($errors);
        }

        $unit = Unit::find($id);
        $unit->uom = $request->uom;

        if ($unit->save()) {
            $unit = Unit::all();
            return redirect()->back()->with('Unit', $unit);
        } else {
            return redirect()->back()->with('error_message', 'Something went wrong. Changes is not saved.');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Unit  $unit
     * @return \Illuminate\Http\Response
     */
    public function destroy(Unit $unit)
    {
        //
    }


    public function delete_unit(Request $request)
    {
        //
        try {
            $err = 0;
            DB::beginTransaction();
            foreach ($request->id as $uom_id) {

                $unit = Unit::find($uom_id);
                if (!$unit->delete()) {
                    $err += 1;
                }
            }


            if ($err <= 0) {
                DB::commit();
                $unit = Unit::all();
                return response()->json([
                    "success" => true,
                    "message" => "Record/s deleted.",
                ], 200);
            } else {
                DB::rollBack();
                return response()->json([
                    "success" => false,
                    "message" => "Record/s NOT deleted.",
                ], 400);
            }
        } catch (Throwable $e) {
            DB::rollBack();
            return response()->json([
                "success" => false,
                "message" => "Record/s NOT deleted.",
            ], 400);
        }
    }
}
