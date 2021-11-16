<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
  public function login()
  {
    return view('home.login');
  }

  public function store(Request $req)
  {
    $this->validate(
      $req,
      [
        'email' => 'required|email:filter',
        'password' => 'required'
      ],
      [
        'email.required' => 'Email không được để trống',
        'password.required' => 'Mật khẩu không được để trống'
      ]
    );

    if (Auth::attempt([
      'email' => $req->input('email'),
      'password' => $req->input('password')
    ], $req->input('remember'))) {
      return redirect()->route('admin');
    }
    session()::flash('error', 'Email hoặc mật khẩu không chính xác');
    return redirect()->back();
  }
}
