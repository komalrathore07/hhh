<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubCatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_cat', function (Blueprint $table) {
            $table->increments('id');
            $table->string('subcat_name');
            $table->string('subcat_slug')->unique();
            $table->integer('category_id')->unsigned();
            $table->foreign('category_id')->references('id')->on('pro_cat');
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
        Schema::dropIfExists('sub_cat');
    }
}
