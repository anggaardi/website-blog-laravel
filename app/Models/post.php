<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{

    protected $table = "post";
    protected $fillable = ['title', 'slug', 'deskripsi', 'content', 'status', 'thumbnail', 'user_id'];
}
