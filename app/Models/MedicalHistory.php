<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class MedicalHistory extends Model
{

    use HasFactory;

    protected $table = 'medical_history';

    
    protected $fillable = [
        'booking_id',
        'heart_disease',
        'heart_disease_reason',
        'high_blood',
        'high_blood_reason',
        'low_blood',
        'low_blood_reason',
        'stroke',
        'stroke_reason',
        'diabetic',
        'diabetic_reason',
        'asthma',
        'asthma_reason',
        'std_hiv_aids_covid19',
        'std_hiv_aids_covid19_reason',
        'lung_disease',
        'lung_disease_reason',
        'liver_disease',
        'liver_disease_reason',
        'stomach_ulcer_gerd',
        'stomach_ulcer_gerd_reason',
        'pregnant',
        'pregnant_reason',
        'oncontraceptives',
        'oncontraceptives_reason',
        'alergies',
        'alergies_reason',
    ];

    public function booking(): BelongsTo
    {
        return $this->belongsTo(Booking::class);
    }

}
