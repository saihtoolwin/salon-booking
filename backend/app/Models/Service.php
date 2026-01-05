<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    /** @use HasFactory<\Database\Factories\ServiceFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'is_active',
    ];

    public function variants()
    {
        return $this->hasMany(ServiceVariant::class);
    }
}
