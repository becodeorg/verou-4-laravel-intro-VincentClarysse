<?php

namespace App\Http\Controllers;

use App\Models\article;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class HomeController extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function home() {
        return view("home");
    }

    public function article_1() {
        return view("article_1"); 
    }

    public function create(){
        return view("create");
    }

    public function form() {
        $request = request()->post();
        $article = new article;
        $article->title = $request["Title"];
        $article->body = $request["Body"];
        $article->save();
        return view("form")->with("request",$request);
        }
}