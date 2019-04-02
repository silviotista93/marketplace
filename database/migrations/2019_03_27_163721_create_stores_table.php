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
            $table->string("rut", 22);
            $table->string("bank_statement", 150);
            $table->string("dni_picture", 150);
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
