<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function __invoke()
    {

        return view('post.index');

    }
}
