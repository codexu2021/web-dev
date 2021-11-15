<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class Post extends Model
{
    use HasFactory;
    protected $primarykey = 'id';
    public $timestamp = false;
    protected $filelabel = [
        'id',
        'user_id',
        'name',
        'contents',
    ];
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
