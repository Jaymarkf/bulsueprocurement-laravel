<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Throwable;

class EmployeeController extends Controller
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
            $employees = Employee::all();
            if (count($employees) === 0) {
                return response()->json([
                    'success' => false,
                    'message' => 'No employees found.',
                    'data' => [],
                    'error' => '',
                ], 404);
            } else {
                return response()->json([
                    'success' => true,
                    'message' => '',
                    'data' => $employees,
                    'error' => '',
                ], 200);
            }
        } catch (Throwable $e) {
            return response()->json([
                'success' => false,
                'message' => 'Something went wrong! Cannot get employees.',
                'data' => [],
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
        $nameReq = 'required|alpha|min:2';
        $validator = Validator::make($request->all(), [
            'first_name' => $nameReq,
            'middle_name' => $nameReq,
            'last_name' => $nameReq,
            'branch_id' => 'numeric|nullable',
            'employee_position_id' => 'required|integer|min:1'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Please complete your inputs.',
                'data' => [],
                'error' => $validator->errors(),
            ], 400);
        }

        try {
            DB::beginTransaction();
            $newEmployee = new Employee();
            $newEmployee->first_name = $request->first_name;
            $newEmployee->middle_name = $request->middle_name;
            $newEmployee->last_name = $request->last_name;
            $newEmployee->branch_id = $request->branch_id === 0 ? null : $request->branch_id;
            $newEmployee->employee_position_id = $request->employee_position_id;

            if ($newEmployee->save()) {
                DB::commit();
                return response()->json([
                    'success' => true,
                    'message' => 'New employee is saved.',
                    'data' => [],
                    'error' => ''
                ], 200);
            }
        } catch (Throwable $e) {
            DB::rollBack();
            return response()->json([
                'success' => false,
                'message' => 'Something went wrong! New employee is not saved.',
                'data' => [],
                'error' => $e,
            ], 400);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
        //
        try {
            if (isset($employee)) {
                return response()->json([
                    'success' => false,
                    'message' => 'Employee record not found.',
                    'data' => [],
                    'error' => '',
                ], 404);
            } else {
                return response()->json([
                    'success' => true,
                    'message' => '',
                    'data' => $employee,
                    'error' => ''
                ], 200);
            }
        } catch (Throwable $e) {
            return response()->json([
                'success' => false,
                'message' => 'Something went wrong! Cannot get employee record.',
                'data' => [],
                'error' => $e,
            ], 400);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employee $employee)
    {
        //
        $nameReq = 'alpha|min:2';
        $validator = Validator::make($request->all(), [
            'first_name' => $nameReq,
            'middle_name' => $nameReq,
            'last_name' => $nameReq,
            'branch_id' => 'numeric|nullable',
            'employee_position_id' => 'integer|min:1'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Please complete your inputs.',
                'data' => [],
                'error' => $validator->errors(),
            ], 400);
        }

        try {
            DB::beginTransaction();
            if ($request->first_name !== null && trim($request->first_name) !== '') {
                $employee->first_name = $request->first_name;
            }

            if ($request->middle_name !== null && trim($request->middle_name) !== '') {
                $employee->middle_name = $request->middle_name;
            }

            if ($request->last_name !== null && trim($request->last_name) !== '') {
                $employee->last_name = $request->last_name;
            }

            if ($request->branch_id !== 0 && $request->branch_id !== null && !is_string($request->branch_id)) {
                $employee->branch_id = $request->branch_id;
            }

            if ($request->employee_position_id !== 0 && $request->employee_position_id !== null && !is_string($request->employee_position_id)) {
                $employee->employee_position_id = $request->employee_position_id;
            }

            if ($employee->save()) {
                DB::commit();
                return response()->json([
                    'success' => true,
                    'message' => 'Changes to records saved.',
                    'data' => [],
                    'error' => '',
                ], 200);
            }
        } catch (Throwable $e) {
            DB::rollBack();
            return response()->json([
                'success' => false,
                'message' => 'Something went wrong! Changes to records not saved.',
                'data' => [],
                'error' => $e,
            ], 200);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employee)
    {
        //
        try {
            DB::beginTransaction();
            if ($employee->delete()) {
                DB::commit();
                return response()->json([
                    'success' => true,
                    'message' => 'Employee record is deleted.',
                    'data' => '',
                    'error' => '',
                ], 200);
            }
        } catch (Throwable $e) {
            DB::rollBack();
            return response()->json([
                'success' => false,
                'message' => 'Something went wrong! Employee record is not deleted.',
                'data' => '',
                'error' => $e,
            ], 200);
        }
    }
}
