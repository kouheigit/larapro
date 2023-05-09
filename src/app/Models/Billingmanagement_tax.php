<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Billingmanagement_tax extends Model
{
    use HasFactory;
    protected $table = 'billingmanagement_taxes';
    protected $fillable = [
        'tax',
        'value',
        'subtotal',
        'ctsv',
        'sum',
        'remarks',
    ];
}
