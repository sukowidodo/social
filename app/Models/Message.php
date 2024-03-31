<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    protected $fillable = [
        "subject","message","sender_id","recepient_id"
    ];

    function sender()
    {
        return $this->belongsTo(User::class, "id","sender_id");
    }

    function recepient()
    {
        return $this->belongsTo(User::class, "id","recepient_id");
    }
}
