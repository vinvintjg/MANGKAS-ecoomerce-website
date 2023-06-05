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
        'booking_service',
        'booking_name',
        'booking_phone',
        'booking_gender',
        'booking_haircut',
        'booking_note',
        'booking_payment_total',
        'booking_payment_method',
        'booking_payment_photo',
        'booking_membership',
        'service',
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
        return $this->belongsTo(Hairstylist::class, 'hairstylist_id');
    }

    public function haircut()
    {
        return $this->belongsTo(Haircut::class, 'booking_haircut');
    }

    public function shop()
    {
        return $this->belongsTo(Shop::class, 'shop_id');
    }

    public function service(){
        return $this->belongsToMany(Service::class, 'booking_service');
    }
}
