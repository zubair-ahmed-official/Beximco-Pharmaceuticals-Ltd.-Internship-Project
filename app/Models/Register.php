<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    use HasFactory;
    protected $table ='register';
    protected $fillable = [
        'name',
        'code',
        'email',
        'phone',
        'nid',
        'address',
        'gender',
        'age',
        'edu'

    ];
}
