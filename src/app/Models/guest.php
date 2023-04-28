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
        'first_product',
        'second_product',
    ];
}
