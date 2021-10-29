<?php

namespace App\Http\Services\Category;

use App\Models\Category;
use Illuminate\Support\Facades\Session;

class CategoryService
{
    public function create($req)
    {
        try {
            Category::create([
                'name' => (string) $req->input('name'),
                'parent_id' => (int) $req->input('parent_id'),
                'description' => (string) $req->input('description'),
                'content' => (string) $req->input('content')
            ]);

            Session::flash('success', 'Tạo danh mục thành công');
        } catch (\Exception $err) {
            Session::flash('error', $err->getMessage());
            return false;
        }
        return true;
    }

    public function getParentId()
    {
        return Category::where('parent_id', 0)->get();
    }

    public function getAll()
    {
        return Category::orderbyDesc('id')->paginate('20');
    }
}
