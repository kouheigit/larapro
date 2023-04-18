<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class guest extends Model
{
    use HasFactory;
    protected $table ='guests';
    protected $fillable = [
        'name',
        'product_code',
        'product_code1',
        'product_code2',
    ];
    /*
    use HasFactory;
    protected $table = 'jstests';
    protected $fillable = [
        'name',
        'city',
        'streetname',
        'streetaddress',
    ];*/
}
