<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class formcontroller extends BaseController
{
    public string $title;
    public string $body;

    public function create_article(){
        $request = request()->post();
        $this->title = $request["Title"];
        $this->body = $request["Body"];
    }
}
