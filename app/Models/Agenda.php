<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    use HasFactory;

    protected $fillable = [
        'hairstylist_id',
        'date',
        'hour',
        'status',
        'shop_id',
    ];

    public function hairstylist()
    {
        return $this->belongsTo(Hairstylist::class);
    }

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}
