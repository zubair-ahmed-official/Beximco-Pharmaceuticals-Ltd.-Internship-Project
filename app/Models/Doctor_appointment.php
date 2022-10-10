<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor_appointment extends Model
{
    use HasFactory;
    protected $table = 'doctors_appointment';
    protected $fillable = [
        'cname',
        'name',
        'phone',
        'email',
        'department',
        'bio',
        'no_of_people',
        'avt'
    ];
}
