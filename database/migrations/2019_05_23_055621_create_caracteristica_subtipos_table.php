<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCaracteristicaSubtiposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('caracteristica_subtipos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('nombre');
            $table->longText('valores');
            $table->longText('validaciones');
            $table->unsignedBigInteger('idSubCategoria');
            $table->foreign('idSubCategoria')->references('id')->on('sub_categories');
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
        Schema::dropIfExists('caracteristica_subtipos');
    }
}
