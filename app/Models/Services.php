<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Services extends Model
{

    use HasFactory;

    protected $fillable = [
        'category',
        'name',
        'description',
        'price'
    ];

    public function services(): BelongsToMany
    {
        return $this->belongsToMany(Services::class, 'avail_services', 'booking_id', 'service_id')
            ->withPivot('date', 'time');
    }
}
