<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{    
    public function post(){
        $posts = Post::all();
        return ($posts);
    }
    
    //
}
