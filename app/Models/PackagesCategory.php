<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PackagesCategory extends Model
{
    use HasFactory;
    
     protected $table = 'package_categories';
    protected $fillable = [
         'category_name',
        
         ];

}
