<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = [
        'booking_id',
        'barber_id',
        'user_id',
        'rating',
        'comment',
    ];

    protected $casts = [
        'rating' => 'interger'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function barber()
    {
        return $this->belongsTo(Barber::class);
    }

    public function booking()
    {
        return $this->belongsTo(Booking::class);
    }
}
