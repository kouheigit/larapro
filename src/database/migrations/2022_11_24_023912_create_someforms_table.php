<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSomeformsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('someforms', function (Blueprint $table) {
            $table->id();
            $table->string("name")->nullable();
            $table->string("text")->nullable();
            $table->smallInteger("check")->nullable();
            $table->smallInteger("check1")->nullable();
            $table->smallInteger("check2")->nullable();
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
        Schema::dropIfExists('someforms');
    }
}
