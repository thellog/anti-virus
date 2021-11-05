<?php

namespace App\Http\Controllers\News;

use App\Http\Controllers\Category\CategoryController;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Http\Services\News\NewsAdminService;

class NewsController extends Controller
{
    //autowrite $newsAdminService
    protected $newsAdminService;

    public function __construct(NewsAdminService $newsAdminService)
    {
        $this->newsAdminService = $newsAdminService;
    }
    public function index()

    {

        return view(
            'home.home',
            [
                'newses' => $this->newsAdminService->get(),
                'newsHot' => $this->newsAdminService->getHotNews(),
                'newsLatest' => $this->newsAdminService->getLatesttNews(),
                'category' => $this->newsAdminService->getAll()
            ]
        );
    }
}
