<?php

namespace App\Http\Controllers\Category;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Http\Services\Category\CategoryService;

class CategoryController extends Controller
{
    //autowrite $newsAdminService
    protected $categoryService;
    public function __construct(CategoryService $categoryService)
    {
        $this->categoryService = $categoryService;
    }
    public function index()

    {

        return [
            'category' => $this->categoryService->get(),
        ];
    }
}
