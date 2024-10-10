<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PackageTest extends Model
{
    use HasFactory;
     protected $table = 'package_tests';
    protected $fillable = [
         'package_subtitle_id',
         'package_id',
         'test_name',
];
}
