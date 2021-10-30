<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\News\NewsRequest;
use App\Http\Services\News\NewsAdminService;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    # Controller
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $newsAdminService;
    public function __construct(NewsAdminService $newsAdminService)
    {
        $this->newsAdminService = $newsAdminService;
    }
    public function index()
    {
        return view('admin.news.list', [
            'title' => 'Danh sách bài viết',
            'newses' => $this->newsAdminService->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.news.add', [
            'title' => 'Thêm bài viết',
            'categories' => $this->newsAdminService->getAll()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NewsRequest $request)
    {
        $this->newsAdminService->insert($request);

        return redirect()->back();
    }

    public function show(News $news)
    {
        return view('admin.news.edit', [
            'title' => 'Chỉnh sửa bài viết',
            'news' => $news,
            'categories' => $this->newsAdminService->getAll()
        ]);
    }
    public function edit()
    {
        //
    }

    public function update(Request $request, News $news)
    {
        $res = $this->newsAdminService->update($request, $news);
        if ($res) {
            return redirect()->route('list');
        }
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $res = $this->newsAdminService->delete($request);
        if ($res) {
            return response()->json([
                'error' => false,
                'message' => ' Xóa bài viết thành công'
            ]);
        }

        return response()->json([
            'error' => true,
        ]);
    }
}
