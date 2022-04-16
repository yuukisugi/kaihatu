<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('histories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('restaurant_id');
            $table->integer('cinema_id');
            $table->integer('amusement_park_id');
            $table->integer('aquarium_id');
            $table->integer('zoo_id');
            $table->integer('climbing_hikingt_id');
            $table->integer('fishing_id');
            $table->integer('book_store_id');
            $table->integer('cd_shop_id');
            $table->integer('furniture_id');
            $table->integer('home_appliances_id');
            $table->integer('fashion_id');
            $table->integer('outlet_id');
            $table->integer('hotel_id');
            
           
            $table->string('edited_at');
            
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
        Schema::dropIfExists('histories');
    }
}
