<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Subcription;

class CreateSubcriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subcriptions', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger("subcription_types_id");
            $table->foreign("subcription_types_id")->references("id")->on("subcription_types");

            $table->unsignedBigInteger("stores_id");
            $table->foreign("stores_id")->references("id")->on("stores");

            $table->timestamp("start_date")->useCurrent();

            $table->enum("status", [Subcription::ACTIVA, Subcription::INACTIVA, Subcription::SUSPENDIDA]);

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
        Schema::dropIfExists('subcriptions');
    }
}
