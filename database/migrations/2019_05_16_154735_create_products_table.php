<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Product;

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
            $table->bigIncrements('id');
            $table->string("slug");
            $table->enum('status', [Product::DISPONIBLE, Product::NO_DISPONIBLE]);
            $table->string("name");
            $table->text("short_description");
            $table->text("description");
            $table->float("price")->unsigned();
            $table->float("price_neto")->unsigned();
            $table->float("percentage")->default(0);
            $table->bigInteger("views");
            $table->bigInteger("sell");
            $table->float("weigth");
            $table->unsignedBigInteger("stores_id");
            $table->foreign("stores_id")->references('id')->on("stores");
            $table->unsignedBigInteger("type_sub_id");
            $table->foreign("type_sub_id")->references('id')->on("type_subcategories");

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
