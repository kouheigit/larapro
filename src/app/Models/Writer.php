<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Writer extends Model
{
    use HasFactory;
    protected $table = 'writers';
    protected $fillable = [
        'id',
        'name',
    ];
    //Bookテーブルと紐付けた
    public function books()
    {
        return $this->hasMany(Book::class);
    }
}
