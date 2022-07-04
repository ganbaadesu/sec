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
            $table->string('Ref_ID')->unique();
            $table->string('BL_No')->nullable();
            $table->string('Cntr_No');
            $table->string('Cargo_Name');
            $table->string('Cnee_Name');
            $table->string('Cnee_Phone');
            $table->string('Port_Of_Loading');
            $table->timestamp('Loading_date');
            $table->timestamp('ATA_VIA_port')->nullable();
            $table->timestamp('ATD_VIA_port')->nullable();
            $table->string('Vehicle_No')->nullable();
            $table->timestamp('ATA_ZU')->nullable();
            $table->timestamp('ATD_ZU')->nullable();
            $table->string('ZU_Vehicle_No')->nullable();
            $table->timestamp('ATA_FD')->nullable();
            $table->string('Rel_Ins')->nullable();
            $table->timestamp('Date_Release')->nullable();
            $table->timestamp('Inst_Give_Date')->nullable();
            $table->string('Shipper')->nullable();
            $table->string('Agent');
            $table->string('Payment');
            $table->string('Collect_Amount')->nullable();
            $table->string('China_Agent');
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
