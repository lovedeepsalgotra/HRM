<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;
    protected $table = 'appointment';
    protected $fillable = [
         'firstname',
        'lastname',
        'mobileno',
        'email',
        'message',
        'date',
        'time',
        // 'linkedinlink'
    ];





}
