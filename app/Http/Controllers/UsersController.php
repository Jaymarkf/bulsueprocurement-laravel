<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Branches;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $branches = Branches::all();
        $users_lists = User::all();
        $access_levels = Branches::distinct()->get(['level']);
        $branch_names = User::distinct()->get(['branch']);
        return view('admin.admin-user',compact('users_lists', 'branches','access_levels', 'branch_names'));
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

        $request -> validate([
            'username' => 'required',
            'email_address' => 'required',
            'password' => 'required',
            'dashboard_year' => 'required',
            'branch_id' => 'required',
            'branch' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'position' => 'required',
            'profile_id' => 'required',
            'approved' => 'required',
            'remarks' => 'required',
            'level' => 'required'
        ]);

        User::create($request->all());
        return redirect()->back();
        // $errors = Session::get('errors');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        //UPDATE

        $users = User::find($request->id);
                
        $users->username = $request->input('username');
        $users->first_name = $request->input('first_name');
        $users->last_name = $request->input('last_name');
        // $users->email_address = $request->input('email_address');
        // $users->branch = $request->input('branch');
        // $users->branch_id = $request->input('branch_id');
        // $users->profile_id = $request->input('profile_id');
        // $users->position = $request->input('position');
        // $users->password = $request->input('password');
        // $users->approved = $request->input('approved');

        $users->save();
                
        return redirect('/admin/manage-user') -> with('success','Descriptions created successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function deleteUser(Request $request)
    {
        $ids = $request->ids;
        User::whereIn('id',$ids)->delete();
        dd($ids);        
        // return redirect()->back();
    }
}
