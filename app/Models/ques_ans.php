<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ques_ans extends Model
{
    use HasFactory;
    protected $table ='ques_anss';
    protected $fillable = [
        'name',
        'ques',
        'ans'
        
    ];
}
