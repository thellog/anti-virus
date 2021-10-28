<?php

namespace App\Http\Controllers\Admin\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function login()
    {
        return view('admin.users.login', [
            'title' => 'Login administrator'
        ]);
    }

    public function news(Request $req)
    {
        $this->validate($req, [
            'email' => 'required|email:filter',
            'password' => 'required'
        ]);

        if (Auth::attempt([
            'email' => $req->input('email'),
            'password' => $req->input('password')
        ], $req->input('remember'))) {
            return redirect()->route('lon');
        }
        Session::flash('error', 'Email or password is incorrect');
        return redirect()->back();
    }
}
