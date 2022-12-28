<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Showform extends Model
{
    use HasFactory;
    protected $table = 'showforms';
    protected $fillable = [
        'pic',
        'email',
        'product_id',
        'sex',
        'address',
    ];
}
