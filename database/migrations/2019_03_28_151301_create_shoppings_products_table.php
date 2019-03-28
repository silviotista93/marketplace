<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShoppingsProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shoppings_products', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedInteger("quantity");
            
            $table->unsignedBigInteger("shoppings_id");
            $table->foreign("shoppings_id")->references("id")->on("shoppings");

            $table->unsignedBigInteger("products_id");
            $table->foreign("products_id")->references("id")->on("products");

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
        Schema::dropIfExists('shoppings_products');
    }
}
