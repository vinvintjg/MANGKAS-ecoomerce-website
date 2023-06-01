<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'agenda_id',
        'user_id',
        'hairstylist_id',
        'shop_id',
        'booking_name',
        'booking_phone',
        'booking_gender',
        'booking_haircut',
        'booking_note',
        'booking_payment_total',
        'booking_payment_method',
        'booking_payment_photo',
        'booking_membership',
    ];

    public function agenda()
    {
        return $this->belongsTo(Agenda::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function hairstylist()
    {
        return $this->belongsTo(Hairstylist::class);
    }

    public function shop()
    {
        return $this->belongsTo(User::class, 'shop_id');
    }
}
