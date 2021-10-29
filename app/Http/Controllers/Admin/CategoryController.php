<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Category\CreateFormRequest;
use App\Http\Services\Category\CategoryService;
use App\Models\Category;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

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

    public function listCategory()
    {
        return view('admin.category.list', [
            'title' => 'Danh sách danh mục',
            'categories' => $this->catService->getAll()
        ]);
    }

    public function destroy(Request $req): JsonResponse
    {
        $res = $this->catService->destroy($req);
        if ($res) {
            return response()->json([
                'error' => false,
                'message' => 'Xóa danh mục thành công!'
            ]);
        }

        return response()->json([
            'error' => true
        ]);
    }


    public function show(Category $category)
    {
        return view('admin.category.edit', [
            'title' => 'Chỉnh sửa danh mục: ' . $category->name,
            'category' => $category,
            'categories' => $this->catService->getAll()
        ]);
    }


  public function update(Category $category, CreateFormRequest $formRequest)
  {
    $this->catService->update($category, $formRequest);

    return redirect('admin/categories/list');
  }
}
