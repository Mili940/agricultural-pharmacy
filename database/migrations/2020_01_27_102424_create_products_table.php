<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{

    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->text('description');
            $table->unsignedSmallInteger('quantity');
            $table->timestamps();
        });

        Schema::create('order_product', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('order_id');
            $table->unsignedInteger('product_id');
            $table->unsignedSmallInteger('quantity');
            $table->unsignedSmallInteger('price');
            $table->timestamps();

            $table->unique(['order_id', 'product_id']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('products');
    }
}
