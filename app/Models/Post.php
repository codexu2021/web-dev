<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class Post extends Model
{
    use HasFactory;
    protected $table = 'laravel_test';
    protected $primarykey = 'id';
    public $timestamp = false;
    

}
