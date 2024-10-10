<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctorlist extends Model
{
    use HasFactory;
    protected $table = 'Doctorlist';
    protected $fillable = [
         'name',
        'department',
        'description',
        'mobileno',
        'email',
        'facebooklink',
        'twiterlink',
        'linkedinlink'
    ];
}
