<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pages extends Model
{
    protected $fillable = [
        'created_at', 'updated_at', 'page_title', 'page_slug', 'page_file', 'page_content', 'page_must', 'page_status'
    ];
}
