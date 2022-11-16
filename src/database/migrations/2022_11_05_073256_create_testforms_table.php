<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestformsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('testforms', function (Blueprint $table) {
            $table->id();
            $table->string("name")->nullable();
            $table->string("comment")->nullable();
            $table->smallInteger("samp")->nullable();
            $table->smallInteger("samp1")->nullable();
            $table->string("remark")->nullable();
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
        Schema::dropIfExists('testforms');
    }
}
