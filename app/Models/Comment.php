<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $filelabel = [
        'id',
        'post_id',
        'name',
        'contents',
        'comment_date',
    ];

    public function post()
    {
        return $this->belongsTo(Post::class,'user_id');
    }
}
