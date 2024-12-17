<?php

namespace App\Http\Controllers;
use App\Models\User;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //
    public function login()
    {
        return view("layouts.login");
    }

     function loginPost(Request  $request)
    {
      // $email=$request->email;
      // $password=$request->password;

    //   $credentials = $request->validate([
    //     'email' => ['required', 'email'],
    //     'password' => ['required'],
    // ]);
    $credentials = $request->only("email", "password");
    // dd($credentials);

    if (Auth::attempt($credentials)) {
        $request->session()->regenerate();

        return redirect()->intended("/");
    }
          return redirect(route("login"))->with("error","Login Failed");
          
    }


    function register()
    {
        return view("layouts.register");
    }
    function registerPost(Request  $request)
    {
      $this->validate($request,[
        "name"=>"required",
        "email"=>"required",
        "password"=>"required",
        "qualifications"=>"required",
      ]);
      $user=new User();
      $user->name=$request->name;
      $user->email=$request->email;
      $user->password=Hash::make($request->password);
      $user->qualifications=$request->qualifications;
      if($user->save()){
        return redirect(route("login"))->with("success","User created successfully");
      }
      return redirect(route("register"))->with("error","Failed");


      


    }
}
