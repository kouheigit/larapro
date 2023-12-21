<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTouristsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tourists', function (Blueprint $table) {
            $table->id();
            //宿泊数
            $table->smallInteger('stay');
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
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tourists');
    }
}
