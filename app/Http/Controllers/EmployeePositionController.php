<?php

namespace App\Http\Controllers;

use App\Models\EmployeePosition;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Throwable;

class EmployeePositionController extends Controller
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
            $employeePositions = EmployeePosition::all();
            if (count($employeePositions) === 0) {
                return response()->json([
                    'success' => false,
                    'message' => 'No employee positions found.',
                    'data' => '',
                    'error' => '',
                ], 404);
            } else {
                return response()->json([
                    'success' => true,
                    'message' => '',
                    'data' => $employeePositions,
                    'error' => ''
                ], 200);
            }
        } catch (Throwable $e) {
            return response()->json([
                'success' => false,
                'message' => 'Something went wrong! Cannot get employee positions.',
                'data' => '',
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
            'employee_type_id' => 'required|numeric',
            'description' => 'required|min:2',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Please complete the inputs.',
                'data' => '',
                'error' => $validator->errors(),
            ], 400);
        }

        try {
            DB::beginTransaction();

            $newEmployeePosition = new EmployeePosition();
            $newEmployeePosition->employee_type_id = $request->employee_type_id;
            $newEmployeePosition->description = $request->description;

            if ($newEmployeePosition->save()) {
                DB::commit();
                return response()->json([
                    'success' => true,
                    'message' => 'New employee position successfully saved.',
                    'data' => '',
                    'error' => '',
                ], 200);
            }
        } catch (Throwable $e) {
            DB::rollBack();
            return response()->json([
                'success' => false,
                'message' => 'Something went wrong, new employee position is not saved.',
                'data' => '',
                'error' => $e,
            ], 400);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\EmployeePosition  $employeePosition
     * @return \Illuminate\Http\Response
     */
    public function show(EmployeePosition $employeePosition)
    {
        //
        try {
            return response()->json([
                'success' => true,
                'message' => '',
                'data' => $employeePosition,
                'error' => '',
            ], 200);
        } catch (Throwable $e) {
            return response()->json([
                'success' => false,
                'message' => 'Something went wrong! Cannot get employee position.',
                'data' => '',
                'error' => $e,
            ], 400);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\EmployeePosition  $employeePosition
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EmployeePosition $employeePosition)
    {
        //
        $validator = Validator::make($request->all(), [
            'employee_type_id' => 'numeric',
            'description' => 'min:2',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Please complete your inputs properly.',
                'data' => '',
                'error' => $validator->errors(),
            ], 400);
        }

        try {
            DB::beginTransaction();

            if ($request->employee_type_id !== null && $request->employee_type_d !== 0) {
                $employeePosition->employee_type_id = $request->employee_type_id;
            }

            if ($request->description !== null && trim($request->description) !== '') {
                $employeePosition->description = $request->description;
            }

            if ($employeePosition->save()) {
                DB::commit();
                return response()->json([
                    'success' => true,
                    'message' => 'Employee position changes saved.',
                    'data' => '',
                    'error' => '',
                ], 200);
            }
        } catch (Throwable $e) {
            DB::rollBack();
            return response()->json([
                'success' => true,
                'message' => 'Something went wrong! Cannot update employee position.',
                'data' => '',
                'error' => $e,
            ], 400);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\EmployeePosition  $employeePosition
     * @return \Illuminate\Http\Response
     */
    public function destroy(EmployeePosition $employeePosition)
    {
        //
        try {
            DB::beginTransaction();
            if ($employeePosition->delete()) {
                DB::commit();
                return response()->json([
                    'success' => true,
                    'message' => 'Employee position is deleted.',
                    'data' => '',
                    'error' => '',
                ], 200);
            } else {
                DB::rollBack();
                return response()->json([
                    'success' => false,
                    'message' => 'Something went wrong! Employee position is not deleted.',
                    'data' => '',
                    'error' => '',
                ], 400);
            }
        } catch (Throwable $e) {
            DB::commit();
            return response()->json([
                'success' => false,
                'message' => 'Something went wrong! Employee position is not deleted.',
                'data' => '',
                'error' => $e
            ], 400);
        }
    }
}
