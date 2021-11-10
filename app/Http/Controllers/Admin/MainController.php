<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
  public function index()
  {
    $users = User::select(DB::raw("COUNT(*) as count"))
      ->whereYear('created_at', date("Y"))
      ->groupBy(DB::raw("Month(created_at)"))
      ->pluck('count');

    $months = User::select(DB::raw("Month(created_at) as month"))
      ->whereYear('created_at', date("Y"))
      ->groupBy(DB::raw("Month(created_at)"))
      ->pluck('month');

    $data = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];
    foreach ($months as $key => $month) {
      --$month;
      $data[$month] = $users[$key];
    }

    return view('admin.home', [
      'title' => 'Admin homepage',
      'data' => $data
    ]);
  }
}
