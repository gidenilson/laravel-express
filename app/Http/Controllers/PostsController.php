<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Post;
use App\Tag;

class PostsController extends Controller
{
    public function index() {
        $posts = Post::paginate(5);
        $tags = Tag::all();
        return view('posts.index', compact(['posts', 'tags']));
    }
}
