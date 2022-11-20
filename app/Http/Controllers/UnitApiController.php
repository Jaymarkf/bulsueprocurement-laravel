<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Throwable;

class UnitApiController extends Controller
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
        if (count($units) === 0) {
            return response()->json([
                'success' => false,
                'message' => 'Units not found.',
                'data' => [],
                'error' => '',
            ], 404);
        } else {
            return response()->json([
                'success' => true,
                'message' => '',
                'data' => $units,
                'error' => '',
            ], 200);
        }
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
        $validate = Validator::make($request->all(), [
            'uom' => 'required',
        ]);

        if ($validate->fails()) {
            $errors = $validate->errors();

            return response()->json([
                'success' => false,
                'message' => 'Please complete your inputs.',
                'data' => [],
                'error' => $errors,
            ], 400);
        }

        $unit = new Unit();
        $unit->uom = $request->uom;

        try {
            DB::beginTransaction();
            if ($unit->save()) {
                DB::commit();
                return response()->json([
                    'success' => true,
                    'message' => 'New unit saved.',
                    'data' => [],
                    'error' => '',
                ], 200);
            }
        } catch (Throwable $e) {
            DB::rollBack();
            return response()->json([
                'success' => false,
                'message' => 'Failed to save.',
                'data' => [],
                'error' => $e,
            ], 400);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Unit  $unit
     * @return \Illuminate\Http\Response
     */
    public function show(Unit $unit)
    {
        //
        try {
            return response()->json([
                'success' => true,
                'message' => '',
                'data' => $unit,
                'error' => '',
            ], 200);
        } catch (Throwable $e) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to get.',
                'data' => [],
                'error' => $e,
            ], 400);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Unit  $unit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Unit $unit)
    {
        //
        $validate = Validator::make($request->all(), [
            'uom' => 'required',
        ]);

        if ($validate->fails()) {
            $errors = $validate->errors();

            return response()->json([
                'success' => false,
                'message' => 'Please complete your inputs.',
                'data' => [],
                'error' => $errors,
            ], 400);
        }

        $unit->uom = $request->uom;

        try {
            DB::beginTransaction();
            if ($unit->save()) {
                DB::commit();
                return response()->json([
                    'success' => true,
                    'message' => 'Change saved.',
                    'data' => [],
                    'error' => '',
                ], 200);
            }
        } catch (Throwable $e) {
            DB::rollBack();
            return response()->json([
                'success' => false,
                'message' => 'Failed to change.',
                'data' => [],
                'error' => $e,
            ], 400);
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
        try {
            DB::beginTransaction();
            if ($unit->delete()) {
                DB::commit();
                return response()->json([
                    'success' => true,
                    'message' => 'Record deleted.',
                    'data' => [],
                    'error' => '',
                ], 200);
            }
        } catch (Throwable $e) {
            DB::rollBack();
            return response()->json([
                'success' => false,
                'message' => 'Record not deleted.',
                'data' => [],
                'error' => $e,
            ], 400);
        }
    }
}
