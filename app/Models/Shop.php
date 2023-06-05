<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    protected $fillable = [
        'shop_name',
        'shop_photo_1',
        'shop_photo_2',
        'shop_photo_3',
        'shop_photo_4',
        'shop_price_low',
        'shop_price_high',
        'shop_rate',
        'shop_location',
        'shop_description',
        'shop_address',
        'shopid',
    ];

    use HasFactory;

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function bookings()
    {
        return $this->hasMany(Booking::class, 'shop_id');
    }
}
