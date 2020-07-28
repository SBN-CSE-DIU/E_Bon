<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->integer('user_id')->nullable();
            $table->integer('category_id')->nullable();
            $table->integer('quantity')->nullable();
            $table->integer('sale_price')->nullable();
            $table->integer('purchase')->nullable();
            $table->integer('discount')->nullable();
            $table->integer('product_status_id')->nullable();
            $table->string('color')->nullable();
            $table->string('age')->nullable();
            $table->mediumText('image')->nullable();
            $table->text('description')->nullable();
            $table->boolean('isdeleted')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('products');
    }
}
