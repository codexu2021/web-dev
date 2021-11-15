<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommentController extends Controller
{
    //
    public function comment(){
        $comments = Post::all();
        return($comments);
    }
}
