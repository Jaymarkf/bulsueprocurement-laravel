<?php

namespace App\Http\Controllers;

use App\Models\Branches;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Throwable;

class BranchController extends Controller
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
            $branches = Branches::all();
            if (count($branches) === 0) {
                return response()->json([
                    'success' => false,
                    'message' => 'No branches found.',
                    'data' => [],
                    'error' => '',
                ], 404);
            } else {
                return response()->json([
                    'success' => true,
                    'message' => '',
                    'data' => $branches,
                    'error' => '',
                ], 200);
            }
        } catch (Throwable $e) {
            return response()->json([
                'success' => false,
                'message' => 'Something went wrong! Cannot get branches.',
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
        try {
            DB::beginTransaction();

            $validator = Validator::make($request->all(), [
                'branch_name' => 'required|min:3',
            ]);

            if ($validator->fails()) {
                return response()->json([
                    'success' => false,
                    'message' => 'Please complete your inputs!',
                    'data' => [],
                    'error' => $validator->errors(),
                ], 400);
            }

            $newBranch = new Branches();
            $newBranch->branch_name = $request->branch_name;

            if ($newBranch->save()) {
                DB::commit();
                return response()->json([
                    'success' => true,
                    'message' => '',
                    'data' => [],
                    'error' => ''
                ], 200);
            }
        } catch (Throwable $e) {
            DB::rollBack();
            return response()->json([
                'success' => false,
                'message' => 'Something went wrong! Branch not saved!',
                'data' => [],
                'error' => $e,
            ], 400);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Branches  $branches
     * @return \Illuminate\Http\Response
     */
    public function show(Branches $branches)
    {
        //
        try {
            if ($branches) {
                return response()->json([
                    'success' => true,
                    'message' => '',
                    'data' => $branches,
                    'error' => ''
                ], 200);
            } else {
                return response()->json([
                    'success' => false,
                    'message' => 'Branch not found.',
                    'data' => [],
                    'error' => '',
                ], 404);
            }
        } catch (Throwable $e) {
            return response()->json([
                'success' => false,
                'message' => 'Something went wrong! Cannot access branch record.',
                'data' => [],
                'error' => $e,
            ], 400);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Branches  $branches
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Branches $branches)
    {
        //
        try {
            DB::beginTransaction();

            $validator = Validator::make($request->all(), [
                'branch_name' => 'required|min:3',
            ]);

            if ($validator->fails()) {
                $errors = $validator->errors();
                return response()->json([
                    'success' => true,
                    'message' => 'Please complete your inputs.',
                    'data' => [],
                    'error' => $errors,
                ], 400);
            }

            if (isset($request->branch_name) || !is_null($request->branch_name) || trim($request->branch_name) !== '') {
                $branches->branch_name = $request->branch_name;
            }

            if ($branches->save()) {
                DB::commit();
                return response()->json([
                    'success' => true,
                    'message' => 'Branch changes successfully saved.',
                    'data' => [],
                    'error' => '',
                ], 200);
            }
        } catch (Throwable $e) {
            return response()->json([
                'success' => false,
                'message' => 'Something went wrong! Cannot save changes.',
                'data' => [],
                'error' => '',
            ], 400);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Branches  $branches
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //
        try {
            DB::beginTransaction();
            $branch = Branches::whereIn($request->id);
            if ($branch->delete()) {
                DB::commit();
                return response()->json([
                    'success' => true,
                    'message' => 'Record/s deleted.',
                    'data' => [],
                    'error' => ''
                ], 200);
            } else {
                DB::rollBack();
                return response()->json([
                    'success' => false,
                    'message' => 'Record/s NOT deleted.',
                ], 400);
            }
        } catch (Throwable $e) {
            DB::rollBack();
            return response()->json([
                'success' => false,
                'message' => 'Record/s NOT deleted.',
                'data' => [],
                'error' => $e,
            ], 400);
        }
    }
}
