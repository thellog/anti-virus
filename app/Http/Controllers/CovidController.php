<?php

namespace App\Http\Controllers;

use App\Http\Services\CovidService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CovidController extends Controller
{
    private $covidService;

    public function __construct(CovidService $covidService)
    {
        $this->covidService = $covidService;
    }
    public function index()
    {
        $data_vn = $this->covidService->getVNCases();
        $data_vn_countries = $data_vn["locations"];
        $data_vn_statistic = $data_vn["overview"];
        return view('home.covid',[
            'title' => 'Thống kê tình hình covid',
            'data_vn' => $data_vn,
            'data_vn_countries' => $data_vn_countries,
            'data_vn_statistic' => $data_vn_statistic,
            'data'  => $this->covidService->getAllCases()
        ]);
    }
}
