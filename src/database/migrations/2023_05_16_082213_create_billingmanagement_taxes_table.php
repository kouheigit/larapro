<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBillingmanagementTaxesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('billingmanagement_taxes', function (Blueprint $table) {
            $table->id();
            $table->integer('tax')->nullable();
            $table->integer('value')->nullable();
            $table->integer('subtotal')->nullable();
            $table->integer('ctsv')->nullable();
            $table->integer('total')->nullable();
            $table->string('remarks')->nullable();
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
        Schema::dropIfExists('billingmanagement_taxes');
    }
}
