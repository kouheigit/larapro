<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jstest extends Model
{
    use HasFactory;
    protected $table = 'jstests';
    protected $fillable = [
        'name',
        'city',
        'streetname',
        'streetaddress',
    ];
}
