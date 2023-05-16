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
            $table->integer('year')->nullable();
            $table->integer('number')->nullable();
            $table->string('item')->nullable();
            $table->double('quantity')->nullable();
            $table->string('unit')->nullable();
            $table->integer('price')->nullable();
            $table->smallInteger('taxation')->nullable();
            $table->integer('sum')->nullable();
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
