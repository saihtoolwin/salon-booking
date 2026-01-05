<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barber extends Model
{
    /** @use HasFactory<\Database\Factories\BarberFactory> */
    use HasFactory;

    protected $fillable = [
        'user_id',
        'bio',
        'rating',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function variants()
    {
        return $this->belongsToMany(ServiceVariant::class, 'barber_variants', 'barber_id', 'service_variant_id');
    }

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}
