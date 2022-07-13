<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStationeriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stationeries', function (Blueprint $table) {
      
            $table->string('stationery_ISBN')->primary();
            $table->string('stationery_title');
            $table->double('stationery_price',8,2);
            $table->integer('stationery_quantity')->unsigned();
            $table->string('stationery_publisher');
            $table->string('stationery_image');
            $table->longText('stationery_description');
            $table->string('stationery_category_ID');
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
        Schema::dropIfExists('stationeries');
    }
}
