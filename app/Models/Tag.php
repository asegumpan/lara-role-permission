<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable =[
        'tag_name',
        'tag_slug'
    ];

    public function post(){
        return $this ->belongsToMany(Post::class, 'post_tag', 'tag_id', 'post_id')->withTimestamps();
    }

}

