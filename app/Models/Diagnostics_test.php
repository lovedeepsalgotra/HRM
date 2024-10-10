<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diagnostics_test extends Model
{
    use HasFactory;

    protected $table = 'diagnostics_test';
    protected $fillable = [

        'test_item',
        'Price',
        'diagnostics_id',
        'pointers',
        'subtitle_id'
        
        ];
}
