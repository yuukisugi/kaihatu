<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRestaurantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restaurants', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('image_main')->nullable();
            $table->string('image_sample')->nullable();
            $table->string('address');
            $table->string('access')->nullable();
            $table->string('parking')->nullable();
            $table->string('business_hours')->nullable();
            $table->string('inquiry')->nullable();
            $table->string('hp_url')->nullable();
            $table->string('budget')->nullable();
            $table->string('settlement')->nullable();
            $table->string('number_of_seats')->nullable();
            $table->string('reserved')->nullable();
            $table->string('smoking')->nullable();
            $table->string('spatial_equipment')->nullable();
            $table->string('with_children')->nullable();
            $table->string('store_pr')->nullable();
            $table->string('interest')->nullable();
            
           
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
        Schema::dropIfExists('restaurants');
    }
}
