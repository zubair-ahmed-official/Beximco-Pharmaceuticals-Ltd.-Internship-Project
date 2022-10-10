<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booked_Appointment extends Model
{
    use HasFactory;
    protected $table = 'booked_appointment';
    protected $fillable = [
        'cname',
        'name',
        'avt'
    ];
}
