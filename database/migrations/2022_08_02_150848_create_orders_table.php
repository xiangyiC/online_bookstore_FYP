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
            $table->double('order_amount',8,2);
            $table->string('user_ID');
            $table->string('payment_status');
            $table->string('order_status');
            $table->string('customer_name');
            $table->string('customer_phoneNo');
            $table->string('street');
            $table->string('city');
            $table->string('state');
            $table->integer('zip_code')->unsigned();
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
