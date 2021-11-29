<?php

namespace App\Http\Services;

use Illuminate\Support\Facades\Http;

class CovidService
{
    public function getAllCases()
    {
        $w_cases = Http::get('https://disease.sh/v3/covid-19/all')->json();
        return $w_cases;
    }

    public function getVNCases()
    {
        $vn_cases = Http::get('https://api.apify.com/v2/key-value-stores/EaCBL1JNntjR3EakU/records/LATEST?disableRedirect=true')->json();
        return $vn_cases;
    }


}