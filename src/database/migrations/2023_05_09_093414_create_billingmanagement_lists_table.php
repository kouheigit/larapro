<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBillingmanagementListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('billingmanagement_lists', function (Blueprint $table) {
            $table->id();
            $table->integer('year');
            $table->integer('number');
            $table->string('item');
            $table->double('quantity');
            $table->string('unit');
            $table->integer('price');
            $table->smallInteger('taxation');
            $table->integer('sum');
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
        Schema::dropIfExists('billingmanagement_lists');
    }
}
