<?php

namespace App\Http\Controllers;

use App\Models\article;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class articlecontroller extends BaseController
{
    public function detail (string $slug){
        return view("article", [
            'slug'=>$slug
        ]);
    }
}
