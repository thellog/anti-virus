<?php

namespace App\Http\Services;

class UpImgService
{
    public function store($req)
    {
        if ($req->hasFile('file')) {
            try {
                $name = $req->file('file')->getClientOriginalName();
                $fullPath = 'uploads/' . date("Y-m-d");
                $req->file('file')->storeAs(
                    'public/' . $fullPath,
                    $name
                );
                return '/storage/' . $fullPath . '/' . $name;
            } catch (\Exception $error) {
                echo $error;
                return false;
            }
        }
    }
}
