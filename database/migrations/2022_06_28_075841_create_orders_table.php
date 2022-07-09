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
            $table->string('RefID')->unique();
            $table->string('BINo')->nullable();
            $table->string('CntrNo');
            $table->string('CargoName');
            $table->string('CneeName');
            $table->string('CneePhone');
            $table->string('PortOfLoading');
            $table->timestamp('LoadingDate');
            $table->timestamp('ATA_VIA_port')->nullable();
            $table->timestamp('ATD_VIA_port')->nullable();
            $table->string('VehicleNo')->nullable();
            $table->timestamp('ATA_ZU')->nullable();
            $table->timestamp('ATD_ZU')->nullable();
            $table->string('ZUVehicleNo')->nullable();
            $table->timestamp('ATA_FD')->nullable();
            $table->string('RelIns')->nullable();
            $table->timestamp('DateRelease')->nullable();
            $table->timestamp('InstGivenDate')->nullable();
            $table->string('Shipper')->nullable();
            $table->string('Agent');
            $table->string('Payment');
            $table->string('CollectAmount')->nullable();
            $table->string('ChinaAgent');
            $table->string('ReturnID')->foreign('id')->references('id')->nullable();
            $table->string('status')->default('Pending');
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
