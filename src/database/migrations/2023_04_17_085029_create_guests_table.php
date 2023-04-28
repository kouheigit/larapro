<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGuestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guests', function (Blueprint $table) {
            $table->id();
            // $table->string('name')->nullable();
            $table->string('name')->nullable();
            $table->string('product_code')->nullable();
            $table->string('first_product')->nullable();
            $table->string('second_product')->nullable();
            /*
            $table->string('product_code1')->nullable();
            $table->string('product_code2')->nullable();*/
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
        Schema::dropIfExists('guests');
    }
}
