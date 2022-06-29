<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReturnIDSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ReturnID', function (Blueprint $table) {
            $table->id();
            $table->string('Inst_given_date');
            $table->string('Shipper');
            $table->string('Agent');
            $table->string('ReturnDate');
            $table->string('VehicleNo');
            $table->string('Destination');
            $table->string('ATA');
            $table->string('ATD');
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
        Schema::dropIfExists('ReturnID');
    }
}
