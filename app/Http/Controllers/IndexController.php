<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $posts = Article::orderBy('id', 'DESC')->paginate(5);
        return view('index', ['posts'=>$posts]);
    }
}
