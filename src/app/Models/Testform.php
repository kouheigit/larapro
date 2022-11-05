<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testform extends Model
{
    use HasFactory;

    protected $table = 'testforms';
    protected $fillable = [
        'name',
        'comment',
        'samp',
        'samp1',
        'remark'
    ];
}
