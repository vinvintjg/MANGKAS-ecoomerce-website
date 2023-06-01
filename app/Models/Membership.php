<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Membership extends Model
{
    use HasFactory;
    use HasFactory;

    protected $fillable = [
        'membership_name',
        'membership_type',
        'user_id',
        'membership_phone',
        'membership_email',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
