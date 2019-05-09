<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Store;

class CreateStoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stores', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('store_name');
            $table->string("rut");
            $table->string("bank_statement");
            $table->string("dni_picture");
            $table->enum("status", [Store::ACTIVO, Store::INACTIVO]);
            $table->unsignedBigInteger("users_id");
            $table->foreign("users_id")->references('id')->on("users");
            $table->unsignedBigInteger("stock_id");
            
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
        Schema::dropIfExists('stores');
    }
}
