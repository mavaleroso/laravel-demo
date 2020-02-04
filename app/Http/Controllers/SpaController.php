<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class SpaController extends Controller
{
    public function index()
    {
        if(session()->has('user_id')) {
            return view('spa');
        } else {
            return redirect()->route('login');
        }
    }

    public function login()
    {
        if(session()->has('user_id')) {
            return redirect()->route('dashboard');
        } else {
            return view('pages.login');
        }

    }

    public function login_request(Request $request) {
        $credentials = [
            'username' => $request['username'],
            'password' => $request['password'],
        ];

    
        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            session()->put('user_id', $user->id);
            session()->put('user_name', $user->name);
            session()->put('user_email', $user->email);
            session()->put('user_uname', $user->username);
            return redirect()->route('dashboard');
        }
    
        return redirect()->route('login');
    }

    public function logout_request(Request $request)
    {
        Auth::logout();
        session()->flush();
        return redirect()->route('login');
    }
}
