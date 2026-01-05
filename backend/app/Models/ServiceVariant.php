<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServiceVariant extends Model
{
    protected $fillable = [
        'service_id',
        'name',
        'duration_minutes',
        'price',
    ];

    public function service()
    {
        return $this->belongsTo(Service::class);
    }

    public function barbers()
    {
        return $this->belongsToMany(Barber::class, 'barber_variants', 'service_variant_id', 'barber_id');
    }
}
