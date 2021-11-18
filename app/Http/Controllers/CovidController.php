<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CovidController extends Controller
{
    public function index()
    {   
        $vn_data = Http::get('https://disease.sh/v3/covid-19/countries/Vietnam')->json();
        $vaccine = Http::get('https://disease.sh/v3/covid-19/vaccine/coverage/countries/vietnam?lastdays=1&fullData=false')->json();
        $respone = Http::get('https://disease.sh/v3/covid-19/all')->json();
        return view('home.covid',[
            'title' => 'Thống kê tình hình covid',
            'vaccine' => $vaccine,
            'data_vn' => $vn_data,
            'data'  => $respone
        ]);
    }
}
