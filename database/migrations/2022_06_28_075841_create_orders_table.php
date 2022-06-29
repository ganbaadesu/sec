<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('RefID');
            $table->string('CntrNo');
            $table->string('CargoName');
            $table->string('CneeName');
            $table->string('IncomeID');
            $table->string('UBportID');
            $table->string('Payment');
            $table->string('CustomerID');
            $table->string('ZUportID');
            $table->string('RefType');
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
        Schema::dropIfExists('orders');
    }
}
