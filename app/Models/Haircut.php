<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Haircut extends Model
{
    protected $fillable = [
        'haircut_name',
        'haircut_logo',
        'shop_id',
    ];

    use HasFactory;

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}
