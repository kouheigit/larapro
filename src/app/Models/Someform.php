<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Someform extends Model
{
    use HasFactory;
    protected $table = 'someforms';
    protected $fillable = [
        'name',
        'text',
        'check',
        'check1',
        'check2',
    ];

}
