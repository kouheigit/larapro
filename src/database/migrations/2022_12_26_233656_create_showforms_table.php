<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShowformsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('showforms', function (Blueprint $table) {
            $table->id();
            //担当者
            $table->string('pic');
            //email
            $table->string('email');
            //商品ID(productのIDと紐づかせる)
            $table->integer('product_id');
            //性別
            $table->string('sex');
            //住所
            $table->string('address');
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
        Schema::dropIfExists('showforms');
    }
}
