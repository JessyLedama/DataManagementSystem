<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarInsurancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('car_insurances', function (Blueprint $table) {
            $table->id();
            $table->string('vehicle_category')->nullable();
            $table->string('mobile')->nullable();
            $table->string('email')->nullable();
            $table->string('vehicle_type')->nullable();
            $table->string('cover_type')->nullable();
            $table->string('vehicle_value')->nullable();
            $table->string('vehicle_registration')->nullable();
            $table->string('insuranceCompanyId')->nullable();
            $table->string('rate')->nullable();
            $table->string('benefits')->nullable();
            $table->string('premium')->nullable();
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
        Schema::dropIfExists('car_insurances');
    }
}
