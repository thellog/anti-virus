<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Services\UpImgService;

class UpImgController extends Controller
{
  # Controller
    protected $upImg;

    public function __construct(UpImgService $upImg)
    {
        $this->upImg = $upImg;
    }

    public function store(Request $req)
    {
        $url = $this->upImg->store($req);
        if ($url !== false) {
            return response()->json([
                'error' => false,
                'url'   => $url
            ]);
        }

        return response()->json([
            'error' => true
        ]);
    }
}
