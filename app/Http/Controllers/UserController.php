<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /**
     * 指定ユーザーのプロファイルを表示
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function showID($id)
    {
        return view('user_profile', [
            'user' => User::findOrFail($id)
        ]);
    }
}
