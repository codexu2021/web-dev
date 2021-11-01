<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{    


    public function post(){
        $post = Post::where('id',1)->get();
        echo self::jsonResponse($post);
        $comments = Post::find(1)->comments;
        echo self::jsonResponse($comments);
        $data = self::jsonResponse($post);
        return view('welcome', ['data'=> $data]);
    }



    //
}
