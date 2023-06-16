<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hairstylist extends Model
{
    protected $fillable = [
        'hairstylist_name',
        'hairstylist_logo',
        'hairstylist_description',
        'hairstylist_rate',
        'hairstylist_review',
        'shop_id',
    ];

    public function bookings()
    {
        return $this->hasMany(Booking::class, 'hairstylist_id');
    }

    public function agendas()
    {
        return $this->hasMany(Agenda::class);
    }

    use HasFactory;
}
