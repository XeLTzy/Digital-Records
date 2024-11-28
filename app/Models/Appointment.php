<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
     use HasFactory;

    // Define the fillable properties for mass assignment
    protected $fillable = [
        'firstname', 
        'middlename', 
        'lastname', 
        'suffix', 
        'contactnumber', 
        'email', 
        'date', 
        'time'
    ];
}
