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
            $table->string('Vehicle_No')->nullable();
            $table->string('Destination')->nullable();
            $table->string('ATA_ZU')->nullable();
            $table->string('ATD_ZU')->nullable();
            $table->string('Transfer_No')->nullable();
            $table->string('Free_Days')->nullable();
            $table->timestamp('Return_Date')->nullable();
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
