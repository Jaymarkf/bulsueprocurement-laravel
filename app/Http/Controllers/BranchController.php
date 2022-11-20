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
            return view('')->with('branches', $branches);
        } catch (Throwable $e) {
            return view('')->with('error_message', 'Cannot fetch branches.');
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
            DB::beginTransaction();

            $validator = Validator::make($request->all(), [
                'branch_name' => 'required|min:3',
                'level' => 'required|max:20',
            ]);

            if ($validator->fails()) {
                $errors = $validator->errors();
                return redirect()->back()->withErrors($errors);
            }

            $newBranch = new Branches();
            $newBranch->branch_name = $request->branch_name;
            $newBranch->level = $request->level;

            if ($newBranch->save()) {
                $branches = Branches::all();
                return redirect()->back()->with('branches', $branches);
            } else {
                return redirect()->back()->with('error_message', 'Something went wrong. Branch not added.');
            }
        } catch (Throwable $e) {
            return redirect()->back()->with('error_message', 'Something went wrong. Branch not added.');
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Branches  $branches
     * @return \Illuminate\Http\Response
     */
    public function edit(Branches $branches)
    {
        //

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
                'level' => 'required|max:20',
            ]);

            if ($validator->fails()) {
                $errors = $validator->errors();
                return redirect()->back()->withErrors($errors);
            }

            $branches->branch_name = $request->branch_name;
            $branches->level = $request->level;

            if ($branches->save()) {
                $allBranches = Branches::all();
                return redirect()->back()->with('branches', $allBranches);
            } else {
                return redirect()->back()->with('error_message', 'Something went wrong. Branch not added.');
            }
        } catch (Throwable $e) {
            return redirect()->back()->with('error_message', 'Something went wrong. Branch not added.');
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
            $err = 0;
            DB::beginTransaction();
            foreach ($request->id as $branch_id) {

                $branch = Branches::find($branch_id);
                if (!$branch->delete()) {
                    $err += 1;
                }
            }


            if ($err <= 0) {
                DB::commit();
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
