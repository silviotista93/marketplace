<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDescriptionStockTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('description_stock', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger("stock_id");
            $table->foreign("stock_id")->references("id")->on("stocks");
            $table->unsignedBigInteger("description_id");
            $table->foreign("description_id")->references("id")->on("descriptions");
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
        Schema::dropIfExists('description_stock');
    }
}
