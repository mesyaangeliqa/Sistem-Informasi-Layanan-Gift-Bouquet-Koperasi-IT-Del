<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name_product');
            $table->unsignedBigInteger('id_product_category');
            $table->string('image_product');
            $table->string('price_product');
            $table->longText('description_product');
            $table->string('status_product');
            $table->float('total_rating')->nullable();
            $table->timestamps();
            $table->foreign('id_product_category')->references('id')->on('product_categories')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}