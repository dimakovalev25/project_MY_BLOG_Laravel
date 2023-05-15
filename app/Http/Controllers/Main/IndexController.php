<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;

class IndexController extends Controller
{
    public function __invoke()
    {

//        $data = [];
//        $data['$usersCount'] = User::all()->count();
//        $data['$postsCount'] = Post::all()->count();
//        $data['$categoriesCount'] = Category::all()->count();
//        $data['$tagsCount'] = Tag::all()->count();
//
//
//        return view('main.index', compact('data'));


        $posts = Post::paginate(6);
        $randomPost = Post::get()->random(4);
        $likedPosts = Post::withCount('likedUsers')->orderBy('liked_users_count', 'DESC')->get()->take(4);
//        dd($likedPosts);

        return view('main.index', compact('posts', 'randomPost', 'likedPosts'));

    }
}
