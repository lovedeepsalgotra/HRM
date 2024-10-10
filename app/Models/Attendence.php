<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendence extends Model
{
    use HasFactory;

    protected $table = 'attendence';
    protected $fillable = [
         'emp_id',
        'log_in',
        'log_out',
        'deduction_hrs',
        'login_date',
        // 'linkedinlink'
    ];
}
