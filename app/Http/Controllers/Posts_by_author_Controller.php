<?php

namespace App\Http\Controllers;

use App\Author;
use Illuminate\Http\Request;

class Posts_by_author_Controller extends Controller
{
    public function __invoke($key){
        $author = Author::where('key', '=', $key)->first();
        return view('post_by_author', ['author' => $author]);
    }
}
