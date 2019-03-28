<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Shopping;

class CreateShoppingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shoppings', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->enum("status", [Shopping::ENVIADO, Shopping::CANCELADO, Shopping::ENTREGADO, Shopping::EN_ESPERA]);
            $table->text("payment_method");

            $table->float("total_price");

            $table->unsignedBigInteger("users_id");
            $table->foreign("users_id")->references("id")->on("users");

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
        Schema::dropIfExists('shoppings');
    }
}
