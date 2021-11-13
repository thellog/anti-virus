<?php

namespace App\Http\Controllers;

class MainController extends Controller
{
  public function index()
  {
    return view('home.home', [
      'title' => 'Anti-Covid'
    ]);
  }

  public function contact()
  {
    return view('home.contact', [
      'title' => 'Liên hệ'
    ]);
  }
}
