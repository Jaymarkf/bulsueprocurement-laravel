<?php

namespace App\Http\Controllers;

use App\Models\EmployeeType;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Throwable;

class EmployeeTypeController extends Controller
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
            $employeeTypes = EmployeeType::all();
            if (count($employeeTypes) === 0) {
                return response()->json([
                    'success' => false,
                    'data' => '',
                    'message' => 'No employee types found.',
                    'error' => ''
                ], 404);
            } else {
                return response()->json([
                    'success' => true,
                    'message' => '',
                    'data' => $employeeTypes,
                    'error' => ''
                ], 200);
            }
        } catch (Throwable $e) {
            return response()->json([
                'success' => false,
                'data' => '',
                'message' => 'Something went wrong! Cannot fetch employee types.',
                'error' => $e,
            ], 400);
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
        $validator = Validator::make($request->all(), [
            'description' => 'required|min:2',
        ]);

        if ($validator->fails()) {
            $errors = $validator->errors();
            return response()->json([
                'success' => false,
                'data' => '',
                'message' => 'Please complete the fields.',
                'error' => $errors,
            ], 400);
        }

        try {
            DB::beginTransaction();
            $newEmployeeType = new EmployeeType();
            $newEmployeeType->description = $request->description;

            if ($newEmployeeType->save()) {
                DB::commit();
                return response()->json([
                    'success' => true,
                    'message' => 'Employee type successfully created.',
                    'data' => [],
                    'error' => '',
                ], 200);
            } else {
                DB::rollBack();
                return response()->json([
                    'success' => false,
                    'message' => 'Something went wrong! Employee type is not created.',
                    'data' => [],
                    'error' => ''
                ], 400);
            }
        } catch (Throwable $e) {
            DB::rollBack();
            return response()->json([
                'success' => false,
                'message' => 'Something went wrong! Employee type is not created.',
                'data' => [],
                'error' => $e,
            ], 400);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\EmployeeType  $employeeType
     * @return \Illuminate\Http\Response
     */
    public function show(EmployeeType $employeeType)
    {
        //
        if ($employeeType) {
            return response()->json([
                'success' => true,
                'message' => '',
                'data' => $employeeType,
                'error' => ''
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Employee type not found.',
                'data' => '',
                'error' => ''
            ], 404);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\EmployeeType  $employeeType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EmployeeType $employeeType)
    {
        //
        $validator = Validator::make($request->all(), [
            'description' => 'required|min:2',
        ]);

        if ($validator->fails()) {
            $errors = $validator->errors();
            return response()->json([
                'success' => false,
                'message' => 'Please complete the fields.',
                'data' => '',
                'error' => $errors,
            ], 400);
        }

        try {
            DB::beginTransaction();
            $employeeType->description = $request->description;

            if ($employeeType->save()) {
                DB::commit();
                return response()->json([
                    'success' => true,
                    'message' => 'Employee type changes successfully saved.',
                    'data' => '',
                    'error' => ''
                ], 200);
            } else {
                DB::rollBack();
                return response()->json([
                    'success' => false,
                    'message' => 'Something went wrong! Employee type changes is not saved.',
                    'data' => '',
                    'error' => ''
                ], 400);
            }
        } catch (Throwable $e) {
            DB::rollBack();
            return response()->json([
                'success' => false,
                'message' => 'Something went wrong! Employee type changes is not saved.',
                'data' => '',
                'error' => $e
            ], 400);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\EmployeeType  $employeeType
     * @return \Illuminate\Http\Response
     */
    public function destroy(EmployeeType $employeeType)
    {
        //
        try {
            DB::beginTransaction();
            if ($employeeType->delete()) {
                DB::commit();
                return response()->json([
                    'success' => true,
                    'message' => 'Employee type is deleted.',
                    'data' => '',
                    'error' => '',
                ], 200);
            } else {
                DB::rollBack();
                return response()->json([
                    'success' => false,
                    'message' => 'Something went wrong! Employee type is not deleted.',
                    'data' => '',
                    'error' => '',
                ], 400);
            }
        } catch (Throwable $e) {
            DB::commit();
            return response()->json([
                'success' => false,
                'message' => 'Something went wrong! Employee type is not deleted.',
                'data' => '',
                'error' => $e
            ], 400);
        }
    }
}
