<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DentalReason extends Model
{

    protected $table = 'dental_reason';

    protected $fillable = [
        'booking_id',
        'reason',
        'medication',
        'DamageStarted',
        'otherinformation',
        'sumasakit',
        'nangingilo',
        'smoker',
        'BleedingGums',
        'BleedingHistory',
    ];

    public function booking(): BelongsTo
    {
        return $this->belongsTo(Booking::class);
    }
}
