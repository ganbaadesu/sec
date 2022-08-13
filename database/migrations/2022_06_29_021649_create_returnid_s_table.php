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
            $table->date('ReturnDate')->nullable();
            $table->string('ReturnVehicleNo')->nullable();
            $table->string('Destination')->nullable();
            $table->date('Return_ATA_ZU')->nullable();
            $table->date('Return_ATD_ZU')->nullable();
            $table->string('TransferNo')->unique()->nullable();
            $table->integer('FreeDays')->nullable();
            $table->string('Alarm')->nullable();
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
