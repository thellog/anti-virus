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

    public function get()
    {
        return Category::orderbyDesc('id')->get();
    }

    public function getAll()
    {
        return Category::orderbyDesc('id')->paginate('20');
    }

    public function destroy($req)
    {
        $id = (int) $req->input('id');
        $category = Category::where('id', $id)->first();
        if ($category) {
            return Category::where('id', $id)->orWhere('parent_id', $id)->delete();
        }
        return false;
    }

    public function update($category, $formRequest): bool
    {
        if ($formRequest->parent_id != $category->id) {
            $category->parent_id = $formRequest->input('parent_id');
            $category->name = $formRequest->input('name');
            $category->description = $formRequest->input('description');
            $category->content = $formRequest->input('content');
            $category->save();

            Session::flash('success', 'Cập nhật thông tin danh mục thành công!');
            return true;
        }
        Session::flash('error', 'Cập nhật lỗi, xin kiểm tra lại danh mục!');
        return false;
    }
}
