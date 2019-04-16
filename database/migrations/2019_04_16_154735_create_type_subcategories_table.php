<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTypeSubcategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('type_subcategories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('subcategory_id');
            $table->foreign("subcategory_id")->references("id")->on("sub_categories");
            $table->unsignedBigInteger('type_id');
            $table->foreign("type_id")->references("id")->on("types");
            $table->string('slug');
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
        Schema::dropIfExists('type_subcategories');
    }
}
