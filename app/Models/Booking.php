<?php

namespace App\Models;

use App\Mail\AcceptedMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Booking extends Model
{
    use HasFactory, Notifiable;

    protected $table = 'booking';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'patient_id',
        'status',
        'date',
        'start_time',
        'end_time',
    ];

    protected static function booted()
    {
        static::saving(function (Booking $booking) {
            if ($booking->isDirty('status') && $booking->status === 'Accepted') {
                // Check for accepted count to avoid sending emails if a limit is breached
                $countAccepted = Booking::where('date', $booking->date)
                    ->where('start_time', $booking->start_time)
                    ->where('status', 'Accepted')
                    ->count();

                // if ($countAccepted >= 2) {
                //     throw new \Exception('Cannot accept more than two bookings for this time slot.');
                // }

                if ($countAccepted >= 2) {
                    $booking->errors = 'Cannot accept more than two bookings for this time slot.';
                    return false; // Prevents saving the record
                }

                // Send email
                $patient = $booking->patient;
                if ($patient) {
                    Mail::to($patient->user->email)->send(new AcceptedMail(
                        $patient->firstname,
                        $patient->middlename,
                        $patient->lastname,
                        $patient->suffix,
                        $booking->date,
                        $booking->start_time
                    ));
                }
            }
        });
    }

    public function patient(): BelongsTo
    {
        return $this->belongsTo(Patient::class);
    }

    public function services(): HasMany
    {
        return $this->hasMany(Services::class);
    }

    public function medicalHistory(): HasOne
    {
        return $this->hasOne(MedicalHistory::class);
    }

    public function healthStatus(): HasOne
    {
        return $this->hasOne(HealthStatus::class);
    }

    public function dentalReason(): HasOne
    {
        return $this->hasOne(DentalReason::class);
    }

    public function getErrors()
    {
        return $this->errors ?? null;
    }
}
