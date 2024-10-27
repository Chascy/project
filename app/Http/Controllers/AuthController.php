<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{
    public function login(){
        return view('landing-login');
    }

    public function loginPost(Request $request){
        $userLogin = $request->validate([
            'user_email' => 'required',
            'user_password' => 'required',
        ]);

        if (auth()->guard('web')->attempt(['email' => $userLogin['user_email'], 'password' => $userLogin['user_password']])){
            $request->session()->regenerate();
        }
        return redirect('/');
    }

    public function register(){
        return view('landing-register');
    }

    public function registerPost(Request $request){
        $userRegister = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        $userRegister['password'] = bcrypt($userRegister['password']);
        $user = User::create($userRegister);
        $user->save();

        return redirect('/');
    }

    public function logout(){
        auth()->guard('web')->logout();
        return redirect('/');
    }
}
