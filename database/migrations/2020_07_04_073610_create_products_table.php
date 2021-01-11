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
            $table->string('catagory_id');
            $table->string('brand_id');
            $table->string('product_name')->nullable();
            $table->string('color_id')->nullable();
            $table->string('size_id')->nullable();
            $table->string('slug')->nullable();
            $table->string('product_price')->nullable();
            $table->string('long_desc')->nullable();
            $table->string('short_desc')->nullable();
            $table->string('image')->nullable();
            $table->string('status')->default(1);
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
        Schema::dropIfExists('products');
    }
}
