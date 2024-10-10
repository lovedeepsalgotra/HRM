<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diagnostic_subtitles extends Model
{
    use HasFactory;

    protected $table = 'diagnostic_subitles';
    protected $fillable = [

        'diagnostics_id',
        'subtitle',
        'image',
        'description'
        ];
}
