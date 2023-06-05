<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chatting extends Model
{
    use HasFactory;

    protected $fillable = ['sender', 'receiver', 'chatting_text'];

    public function user()
    {
        return $this->belongsTo(User::class, 'sender');
    }
}
