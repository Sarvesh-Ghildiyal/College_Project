<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Redirect;

use App\Models\User;

class UserController extends Controller
{
        function login() {
            return view('user.login')->with('title','Home');
        }
        
        function submit_login(Request $request){
            // return $request->input();
            $request->validate([
                'email'=>'required',
                'password'=>'required'
            ]);
            
            $userCheck = User::where(['email'=>$request->email, 'password'=>$request->password])->count();
            if ($userCheck > 0) {
                $userData = User::where(['email'=>$request->email, 'password'=>$request->password])->first();
                // dd($userData->id,$userData->role);
                session(['userData'=>$userData]);
                return redirect('user/complain_form');
            }
            else {
                return Redirect::back()->withErrors('Invalid email or password');
            }
            
        }

        function complain_form(){
            return view('user.complain_form')->with('title','Complain_Form');
        }

        function remark(){
            return view('user.remark')->with('title','Remarks_Form');
        }

        function logout(){
            session()->forget(['userData']);
            return view('/user/login')->with('title','Home');
        }
}
