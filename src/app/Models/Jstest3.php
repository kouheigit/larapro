<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jstest3 extends Model
{
    //start
    use HasFactory;
    protected $table = 'jstest3';
    protected $fillable = [
        'name',
        'city',
        'streetname',
        'streetaddress',
        'hourly_wage',
    ];
}
