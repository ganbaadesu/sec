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
            $table->string('RefNo')->unique();
            $table->string('BINo');
            $table->string('CntrNo');
            $table->string('CargoName');
            $table->string('CneeName');
            $table->string('CneePhone');
            $table->string('PortOfLoading');
            $table->date('LoadingDate');
            $table->date('ATA_VIA_port')->nullable();
            $table->date('ATD_VIA_port')->nullable();
            $table->string('Port')->nullable();
            $table->string('VehicleNo')->nullable();
            $table->date('ATA_ZU')->nullable();
            $table->date('ATD_ZU')->nullable();
            $table->string('ZUVehicleNo')->nullable();
            $table->date('ATA_FD')->nullable();
            $table->string('ZU_Port')->nullable();
            $table->string('RelIns')->nullable();
            $table->date('DateRelease')->nullable();
            $table->date('InstGivenDate')->nullable();
            $table->string('Shipper')->nullable();
            $table->string('Agent');
            $table->string('Payment');
            $table->string('CollectAmount')->nullable();
            $table->string('ChinaAgent');
            $table->string('ReturnID')->foreign('id')->references('id')->nullable();
            $table->string('RefType')->default("general");
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
