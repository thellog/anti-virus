<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Category\CreateFormRequest;
use App\Http\Services\Category\CategoryService;

class CategoryController extends Controller
{
    protected $catService;
    public function __construct(CategoryService $catService)
    {
        $this->catService = $catService;
    }
    public function addCategory()
    {
        return view('admin.category.add', [
            'title' => 'Thêm danh mục',
            'categories' => $this->catService->getParentId()
        ]);
    }

    public function saveCategory(CreateFormRequest $req)
    {
      $this->catService->create($req);
      return redirect()->back();
    }

  public function listCategory(){
    return view('admin.category.list', [
      'title' => 'Danh sách danh mục',
      'categories' => $this->catService->getAll() 
    ]);
  }
}
