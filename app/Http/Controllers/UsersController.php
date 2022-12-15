<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Branches;
use App\Models\UserProfiles;
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
        // $branches = Branches::all();
        // $users_lists = User::all();
        // $access_levels = Branches::distinct()->get(['level']);
        // $branch_names = User::distinct()->get(['branch']);
        $users_lists = User::with('profiles')->get();
        $branches = Branches::distinct()->get(['branch_name']);
        return view('admin.admin-user',compact('users_lists','branches'));
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
<<<<<<< HEAD

        //TODO do not proceed to create if firstname middle name and last name is exist
=======
>>>>>>> b646d17 (test)
        $request -> validate([
            'username' => ['required','unique:App\Models\User,username'],
            'email_address' => ['required','email:rfc,dns'],
            'first_name'  => ['required', 'regex:/^([a-zA-Z]+)(\s[a-zA-Z]+)*$/'],
            'last_name'  => ['required', 'regex:/^([a-zA-Z]+)(\s[a-zA-Z]+)*$/']
<<<<<<< HEAD
        ]);
        $user = new User([
            'username'=>$request->username,
            'email_address'=>$request->email_address,
            'password'=>md5('12345'),
            'level' => $request->level,
            'branch_id'=> 1,
            'approved' => 1,
            'added_by' => 1,
            'remarks' => 'created'
        ]);
        $user_profiles = new UserProfiles([
            'first_name' => $request->first_name,
            'middle_initial' => $request->middle_name,
            'last_name' => $request->last_name,
            'employee_position_id' => 1
=======
>>>>>>> b646d17 (test)
        ]);
       $user_profiles->save();
       $user->profiles()->associate($user_profiles);
       $user->save();

<<<<<<< HEAD
        // User::create($request->all());
        return redirect()->back()->with('success','New account was created');
=======
        // $user_profiles = new UserProfiles();
        // $user = new User();

        // $user_profiles->first_name = $request->first_name;
        // $user_profiles->middle_initial = $request->middle_name;
        // $user_profiles->last_name = $request->last_name;
        // $user_profiles->employee_position_id = 1;
        
        // $user->username = $request->username;
        // $user->email_address = $request->email_address;
        // $user->password = md5($request->password);
        // $user->level = $request->level;
        // $user->branch_id = 1;
        $user = new User([
            'username'=>$request->username,
            'email_address'=>$request->email_address,
            'password'=>$request->password,
            'level' => $request->level,
            'branch_id'=> 1
        ]);
        $user_profiles = new UserProfiles([
            'first_name' => $request->first_name,
            'middle_initial' => $request->middle_name,
            'last_name' => $request->last_name,
            'employee_position_id' => 1
        ]);

        

       $user->save();
       $user_profiles->users()->associate($user);
       $user_profiles()->users()->save();
      
     
       
        
        // User::create($request->all());
        return redirect()->back();
>>>>>>> b646d17 (test)
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
       
        $user_id = User::select('profiles_id')->whereIn('id',$ids)->get()->first();
        $d = $user_id->profiles_id;
        UserProfiles::where('id','=' , $d)->delete();
        User::whereIn('id',$ids)->delete();
        return redirect()->back()->with('success','User account was deleted');
    }
}
