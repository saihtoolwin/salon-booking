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
}
