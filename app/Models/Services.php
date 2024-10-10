<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    use HasFactory;

     protected $table = 'Services';
    protected $fillable = [
        'image',
        'title',
        'tagline',
        'heading',
        'short_des',
        'description',
        ];
}
