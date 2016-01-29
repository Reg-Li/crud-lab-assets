<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class RandomController extends Controller
{
    public function index() {
        $post = Post::all()->random();
        $data = compact('post');

        return view('posts.show', $data);
    }
}
