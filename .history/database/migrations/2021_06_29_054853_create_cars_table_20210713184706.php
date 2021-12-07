<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('makeId');
            $table->string('modelId');
            $table->string('price');
            $table->string('priceType');
            $table->string('mileage');
            $table->string('conditionId');
            $table->string('year');
            $table->string('bodyId');
            $table->string('transmissionId');
            $table->string('enginesizeId');
            $table->string('enginetypeId');
            $table->string('image');
            $table->string('youtubelink')->nullable();
            $table->string('tags')->nullable();
            $table->string('description');
            $table->string('cityId');
            $table->string('sellerId');
            $table->string('sellermobile');
            $table->string('selleraddress');
            $table->string('adStatus');
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
        Schema::dropIfExists('cars');
    }
}
