<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diagnostic extends Model
{
    use HasFactory;

    protected $table = 'Diagnostics';
    protected $fillable = [

        'name',
        'Title',
        'Short_des',
        'category'
        ];
}
