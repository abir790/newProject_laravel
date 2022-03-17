<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Requests\loginRequest;
use App\Http\Controllers\Controller;
use Auth;
use App\Admin;

class loginController extends Controller
{
    public function login(){
        return view('login.login');
    }
    public function authentication(loginRequest $request){
        $data=$request->only('email','password'); // akhane auth all time hash pass follow kore
        if(Auth::attempt($data)){
            return redirect()->intended('users');
        }else{
            return redirect()->route('login');
            //return "login action";
        }
        //return "login action";
        //return $data;
   }
   public function logout(){
       Auth::logout();
       return redirect()->intended('login');
   }
}
