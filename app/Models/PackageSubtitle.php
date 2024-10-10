<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PackageSubtitle extends Model
{
    use HasFactory;
        protected $table = 'package_subitles';
    protected $fillable = ['package_id','subtitle',
];

}
