<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class HotController extends Controller
{
    public function index() {
        $posts = Post::orderBy('page_view', 'DESC')
                    ->get();
        $pageType = 'Random';
        $data = compact('posts', 'pageType');

    	return view('posts.index', $data);
    }
}
