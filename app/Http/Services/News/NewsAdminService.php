<?php

namespace App\Http\Services\News;

use App\Models\Category;
use App\Models\News;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class NewsAdminService
{
  public function getAll()
  {
    return Category::orderByDesc('id')->get();
  }

  public function get()
  {
    return News::with('category')->orderByDesc('id')->paginate(15);
  }

  public function getHotNews()
  {
    return News::with('category')->where('isHot', 1)->take(1)->get();
  }

  public function getLatesttNews()
  {
    return News::with('category')->orderByDesc('updated_at')->take(5)->get();
  }

  public function insert($request)
  {
    try {
      $request->except('_token');
      News::create($request->all());
      Session::flash('success', 'Thêm bài viết thành công!');
    } catch (\Exception $error) {
      Session::flash('error', 'Thêm bài viết thật bại! Mã lỗi: ' . $error->getMessage());
      return false;
    }
    return true;
  }

  public function update($request, $news)
  {
    try {
      $news->fill($request->input());
      $news->save();
      Session::flash('success', 'Cập nhật bài viết thành công!');
    } catch (\Exception $error) {
      Session::flash('error', 'Cập nhật thông tin thất bại! Mã lỗi: ' . $error->getMessage());
    }
  }

  public function delete($request)
  {
    $check = News::where('id', $request->input('id'))->first();
    if ($check) {
      $check->delete();
      return true;
    }
    return false;
  }

  public function getUserData()
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

    return $data;
  }

  public function getInjectData()
  {
  }
  public function getNews()
  {
    return News::with('category')->orderByDesc('id')->simplePaginate(10);
  }
  public function getByCategory($id)
  {
    return News::with('category')->where('category_id', $id)->simplePaginate(10);
  }
}
