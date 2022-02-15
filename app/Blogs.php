<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blogs extends Model
{
    protected $fillable = [
        'created_at', 'updated_at', 'blog_title', 'blog_slug', 'blog_file', 'blog_content', 'blog_must', 'blog_status'
    ];
}
