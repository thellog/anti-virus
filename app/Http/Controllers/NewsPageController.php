<?php

namespace App\Http\Controllers;

use App\Http\Services\News\NewsAdminService;
use Illuminate\Http\Request;

class NewsPageController extends Controller
{
    protected $newsAdminService;

    public function __construct(NewsAdminService $newsAdminService)
    {
        $this->newsAdminService = $newsAdminService;
    }
    //
    public function index($id)
    {
        return view('home.newsdetail', [
            'newsLates' => $this->newsAdminService->getLatesttNews(),
            'newsDetail' => $this->newsAdminService->getNewsDetail($id),
            'category' => $this->newsAdminService->getAll(),
            'popular' => $this->newsAdminService->getPopular()
        ]);
    }

    // public function index($id)
    // {
    //     return view('home.newsdetail', [
    //         'newsDetail' => $this->newsAdminService->getNewsDetail($id)
    //     ]);
    // }
}
