<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login()
    {
        return view('pages.login');

    }

    public function loginForm(LoginRequest $req)
    {
        $email = strip_tags(trim(htmlspecialchars($req->email)));

        $password = $req->password;
        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            return redirect()->route('admin');


        }
        return redirect()->route('login')->withErrors('email ve ya password yalnisdir');


    }
    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }
}
