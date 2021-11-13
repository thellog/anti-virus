<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Services\News\NewsAdminService;

class MainController extends Controller
{

  protected $newService;

  public function __construct(NewsAdminService $newsAdminService)
  {
    $this->newService = $newsAdminService;
  }

  public function index()
  {
    $data = $this->newService->getUserData();
    return view('admin.home', [
      'title' => 'Admin homepage',
      'data' => $data
    ]);
  }
}
