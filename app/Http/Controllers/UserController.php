<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function Viewlogin(Request $request){
       return view('auth.login');
    }
    public function login(Request $request){
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {

            return redirect()->intended('/home');
        }


        return back()->withErrors(['email' => 'Invalid credentials']);
    }


    public function logout()
    {
        Auth::logout();
        return redirect('/'); // You can customize the redirect URL
    }

    public function startquiz(){

    }
}
