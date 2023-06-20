<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
//larapro start
{
    use HasFactory;
    protected $table = 'books';
    protected $fillable = [
        'name',
        'value',
        'writer_id',
    ];
    public function writer()
    {
        return $this->belongsTo(Writer::class);
       // return $this->belongsTo(Writer::class,'id','writer_id');
    }
}
