<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        "user_id","post_text","post_image"
    ];

    function user()
    {
        return $this->belongsTo(User::class);
    }
}
