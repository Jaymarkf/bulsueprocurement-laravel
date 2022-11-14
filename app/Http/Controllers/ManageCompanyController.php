<?php

namespace App\Http\Controllers;

use App\Models\Companies;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Throwable;

class ManageCompanyController extends Controller
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
            $companies = Companies::all();
            return view('admin/manage-company')->with('companies', $companies);
        } catch (Throwable $e) {
            return view('admin/manage-company')->with('errors', $e);
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
        return view('admin/manage-add-company');
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
            'name' => 'required|min:2',
            'address' => 'required|min:5',
            'tin' => 'required|min:6',
            'email_address' => 'required|min:5|email',
            'contact' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors());
        }

        try {
            DB::beginTransaction();
            $newCompany = new Companies();
            $newCompany->name = $request->name;
            $newCompany->address = $request->address;
            $newCompany->tin = $request->tin;
            $newCompany->email_address = $request->email_address;
            $newCompany->contact = $request->contact;

            if ($newCompany->save()) {
                DB::commit();
                return redirect('admin/manage-company')->with('status', 'Company added!');
            }
        } catch (Throwable $e) {
            DB::rollBack();
            return redirect()->back()->withErrors($e);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Companies  $companies
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $companies = Companies::find($id);

        return view('admin/manage-edit-company')->with('company', $companies);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Companies  $companies
     * @return \Illuminate\Http\Response
     */
    public function edit($id, Request $request)
    {
        //

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Companies  $companies
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $validator = Validator::make($request->all(), [
            'name' => 'min:2',
            'address' => 'min:5',
            'tin' => 'min:6',
            'email_address' => 'min:5|email',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors());
        }

        try {
            DB::beginTransaction();
            $company = Companies::find($id);
            $company->name = $request->name;
            $company->address = $request->address;
            $company->tin = $request->tin;
            $company->email_address = $request->email_address;
            $company->contact = $request->contact;

            if ($company->save()) {
                DB::commit();
                return redirect('admin/manage-company')->with('status', 'Company changes saved!');
            }
        } catch (Throwable $e) {
            DB::rollBack();
            return redirect()->back()->withErrors($e);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Companies  $companies
     * @return \Illuminate\Http\Response
     */
    public function destroy(Companies $companies)
    {
        //
    }

    public function delete_selected(Request $request)
    {
        try {
            $err = 0;
            DB::beginTransaction();
            foreach ($request->id as $company_id) {

                $company = Companies::find($company_id);
                if (!$company->delete()) {
                    $err += 1;
                }
            }


            if ($err <= 0) {
                DB::commit();
                $company = Companies::all();
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
