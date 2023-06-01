<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        'service_name',
        'service_logo',
        'shop_id',
        'service_price',
    ];

    use HasFactory;

    public function booking(){
        return $this->belongsToMany(Booking::class);
    }
}
