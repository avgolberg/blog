<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class Single_post_Controller extends Controller
{
    public function __invoke($id){
        $post = Article::where('id', '=', $id)->first();
        return view('single_post', ['post' => $post]);
    }
}
