<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\ResetPassword;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use Mail;
use App\Mail\ForgetPasswordMail;
use Illuminate\Validation\Rules\Password;


class ResetPasswordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

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
    public function update(Request $request, $id)
    {
        //
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

    // Function for Forget Password
    public function getForgetPassword()
    {
        //
        return view('mail.password-reset');
        
    }

    public function postForgetPassword(Request $request)
    {
        //
        $request->validate([
            'email' => 'required|email'
        ]);

        $users_lists = User::where('email_address',$request->email)->first();


        if(!$users_lists){
            return redirect()->back()->with('error','User Not Found');
        }else{
            $reset_code = Str::random(25);
            ResetPassword::create([
                'user_id' => $users_lists->id,
                'reset_code'=>$reset_code
                ]);
            

            Mail::to($users_lists->email_address)->send(new ForgetPasswordMail($users_lists->first_name,$reset_code));
            return redirect()->back()->with('success','We have sent you a password reset link. PLease Check your email');
        }

        
    }

    public function getResetPassword($reset_code){
        $password_reset_data=ResetPassword::where('reset_code',$reset_code)->first();
  
        if(!$password_reset_data || Carbon::now()->subMinutes(10)> $password_reset_data->created_at){
           return redirect()->route('getForgetPassword')->with('error','Invalid password reset link or link expired.');
        }else{
          return view('mail.resetpassword ',compact('reset_code'));
        }
    }


    public function postResetPassword($reset_code, Request $request){
        $password_reset_data=ResetPassword::where('reset_code',$reset_code)->first();
        
        if(!$password_reset_data || Carbon::now()->subMinutes(10)> $password_reset_data->created_at){
           return redirect()->route('reset-code')->with('error','Invalid password reset link or link expired.');
        }else{
  
           $request->validate([
           'email'=>'required|email',
           'password'=>[
            'required', 'min:6', 'max:100',
            Password::min(8)->mixedCase()->letters()->numbers()->symbols()->uncompromised(),
            ],
           'confirm_password'=>'required|same:password',
           ]);
  
           $user=User::find($password_reset_data->user_id);
           $user->password = $request->password;
           $user->save();

           return redirect()->back()->with('success', 'Your password has been reset successfully');
  
           
        //    if($user->email!=$request->email){
        //       return redirect()->back()->with('error','Enter correct email.');
        //    }else{
  
        //       $password_reset_data->delete();
        //       $user->update([
        //           'password'=>bcrypt($request->password)
        //       ]);
  
        //       return redirect()->route('reset-code')->with('success','Password successfully reset. ');
        //    }
        }
      }

}
