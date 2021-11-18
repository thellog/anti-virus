<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use Illuminate\Support\Facades\Hash;
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
    return redirect()->back()->with('error', 'Email hoặc mật khẩu không chính xác!');
  }
  public function registration(Request $req)
  {
    $req->validate([
      'name'=>'required',
      'email'=>'required|email|unique:users',
      'password'=>'required|min:5|max:12'
    ]);
    $user = new User();
    $user->name = $req->name;
    $user->email = $req->email;
    $user->password = Hash::make($req->password);
    $res = $user->save();
    if($res)
    {
        return back()->with('success','You have registerred successfuly');
    }
    else{
        return back()->with('fail', 'Something wrong');
    }
  }
}
