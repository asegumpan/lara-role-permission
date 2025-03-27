<?php

namespace App\Models;

use App\Model\Post;
use Illuminate\Database\Eloquent\Model;
class Category extends Model
{
    protected $fillable =[
        'category_name',
        'category_slug',
        'category_description'
    ];

    public function post(){
        return $this ->hasMany(Post::class);
    }
}
