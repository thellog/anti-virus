<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function login()
    {
        return view('home.login');
    }
    public function store(Request $req)
    {
        $this->validate($req, [
            'email' => 'required|email:filter',
            'password' => 'required'
        ]);

        if (Auth::attempt([
            'email' => $req->input('email'),
            'password' => $req->input('password')
        ], $req->input('remember'))) {
            return redirect()->route('admin');
        }
        Session::flash('error', 'Email or password is incorrect');
        return redirect()->back();
    }
}
