<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PackageAss_Category extends Model
{
    use HasFactory;
      protected $table = 'package_assigned_categories';
    protected $fillable = [
         'package_id',
         'category_id',
];
}
