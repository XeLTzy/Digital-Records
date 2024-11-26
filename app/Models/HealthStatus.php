<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class HealthStatus extends Model
{

    protected $table = 'health_status';

    protected $fillable = [
        'booking_id',
        'Cough',
        'Sipon',
        'Fever',
        'Flu',
        'WeakenBody',
        'BodyShaking',
        'JointPain',
        'SwollenThroat',
        'NoneTaste_Smell',
        'FrequentHeadaches',
        'DifficultyBreathing',
        'MedicationsForConditions',
    ];

    public function booking(): BelongsTo
    {
        return $this->belongsTo(Booking::class);
    }
}
