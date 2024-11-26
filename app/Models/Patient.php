<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Patient extends Model
{
    //
    use HasFactory;

    // The table associated with the model
    protected $table = 'patients';

    // The attributes that are mass assignable
    protected $fillable = [
        'user_id',
        'firstname',
        'middlename',
        'lastname',
        'suffix',
        'number',
        'gender',
        'birthday',
        'city',
        'barangay',
        'street',
        'housenumber',
    ];

    public function booking(): HasMany
    {
        return $this->hasMany(Booking::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function getFullNameAttribute()
    {
        return trim("{$this->firstname} {$this->middlename} {$this->lastname}  {$this->suffix}");
    }
}
