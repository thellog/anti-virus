<?php

namespace App\Http\Controllers;

use App\Http\Services\News\NewsAdminService;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\News;

class PageController extends Controller
{

    protected $newsAdminService;

    public function __construct(NewsAdminService $newsAdminService)
    {
        $this->newsAdminService = $newsAdminService;
    }
    //
    public function index()
    {
        return view(
            'home.home'
        );
    }


    public function getNewLates()
    {
        return view('home.hotnews', [
            'newsHot' => $this->newsAdminService->getHotNews(),
            'newsLates' => $this->newsAdminService->getLatesttNews(),
            'category' => $this->newsAdminService->getAll(),
            'news' => $this->newsAdminService->getNews()
        ]);
    }

    public function getBycategory($id)
    {
        return view(
            'home.news',
            [
                'newsHot' => $this->newsAdminService->getHotNews(),
                'categ' => $this->newsAdminService->getByCategory($id),
                'newsLates' => $this->newsAdminService->getLatesttNews(),
                'category' => $this->newsAdminService->getAll(),
                'news' => $this->newsAdminService->getNews()
            ]
        );
    }
}
