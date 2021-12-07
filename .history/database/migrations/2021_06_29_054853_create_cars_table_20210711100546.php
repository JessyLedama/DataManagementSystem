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
            $table->string('priceId');
            $table->string('pricetype');
            $table->string('mileage');
            $table->string('condition');
            $table->string('year');
            $table->string('bodytype');
            $table->string('transmission');
            $table->string('enginesize');
            $table->string('enginetype');
            $table->string('image');
            $table->string('youtubelink')->nullable();
            $table->string('tags')->nullable();
            $table->string('description');
            $table->string('city');
            $table->string('sellername');
            $table->string('sellermobile');
            $table->string('selleraddress');
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
