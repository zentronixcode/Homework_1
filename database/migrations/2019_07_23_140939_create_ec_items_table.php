<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEcItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ec_items', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('product_name');
            $table->integer('amount');
            $table->integer('price');
            $table->string('photo');
            $table->unsignedInteger('cat_id');
            $table->foreign('cat_id')->references('id')->on('ec_cats');
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
        Schema::dropIfExists('ec_items');
    }
}
