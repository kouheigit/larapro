<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tourist extends Model
{
    use HasFactory;
    protected $table ='tourists';
    /*
     * $table->smallInteger('stay');
            $table->smallInteger('payment');
            $table->string('email');
            $table->string('email-confirmation');
            $table->string('user');
            $table->Integer('adult');
            $table->Integer('child');
            $table->Integer('dog');
            $table->smallInteger('dog-check');
            $table->string('checkin');
            $table->string('checkout');
            $table->longText('suggest');
     */

    protected $fillable = [
        'stay',
        'payment',
        'email',
        'email-confirmation',
        'user',
        'adult',
        'child'
    ];
}
