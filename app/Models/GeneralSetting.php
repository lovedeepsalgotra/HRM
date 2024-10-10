<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GeneralSetting extends Model
{
    use HasFactory;

    protected $table = 'generalsettting';
    protected $fillable = [
         'phoneno',
        'openhours',
        'address',
        'email',
        'video',
        'abouttitle',
        'aboutdes'
         ];


}
