<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIncomeIDSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('incomeID', function (Blueprint $table) {
            $table->id();
            $table->string('Port_of_loading');
            $table->string('Loading_date');
            $table->string('ATA_via');
            $table->string('ATD_via');
            $table->string('VehicleNo');
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
        Schema::dropIfExists('incomeID');
    }
}
