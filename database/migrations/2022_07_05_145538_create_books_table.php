<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->string('book_ISBN')->primary();
            $table->string('book_title');
            $table->double('book_price',8,2);
            $table->integer('book_quantity')->unsigned();
            $table->string('book_publisher');
            $table->string('book_image');
            $table->string('book_author');
            $table->integer('book_pages')->unsigned();
            $table->string('book_language');
            $table->string('book_format');
            $table->longText('book_description');
            $table->string('category_ID');
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
        Schema::dropIfExists('books');
    }
}
