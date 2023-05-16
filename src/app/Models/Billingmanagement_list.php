<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Billingmanagement_list extends Model
{
    use HasFactory;
    protected $table = 'billingmanagement_lists';
    protected $fillable = [
        'year',
        'number',
        'item',
        'quantity',
        'unit',
        'price',
        'taxation',
        'sum',
    ];


}
