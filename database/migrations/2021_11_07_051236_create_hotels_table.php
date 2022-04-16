<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHotelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     // title と body と image_path を追記
    public function up()
    {
        Schema::create('hotels', function (Blueprint $table) {
            $table->bigIncrements('id');
            
            $table->string('name');
            $table->string('reserve')->nullable();
            $table->string('hotelorryokan')->nullable();
            $table->string('image_main')->nullable();
            $table->string('todouhuken')->nullable();;
            $table->string('address')->nullable();
            $table->string('access')->nullable();
            $table->string('parking')->nullable();
            
            $table->string('room_name')->nullable();
            $table->string('image_room')->nullable();
            $table->string('room_type')->nullable();
            $table->string('room_size')->nullable();
            $table->string('bet_size')->nullable();
            $table->string('equipment')->nullable();
            $table->string('amenities')->nullable();
            
            $table->string('room_name_2')->nullable();
            $table->string('image_room_2')->nullable();
            $table->string('room_type_2')->nullable();
            $table->string('room_size_2')->nullable();
            $table->string('bet_size_2')->nullable();
            $table->string('equipment_2')->nullable();
            $table->string('amenities_2')->nullable();
            
            $table->string('room_name_3')->nullable();
            $table->string('image_room_3')->nullable();
            $table->string('room_type_3')->nullable();
            $table->string('room_size_3')->nullable();
            $table->string('bet_size_3')->nullable();
            $table->string('equipment_3')->nullable();
            $table->string('amenities_3')->nullable();
            
            $table->string('total_room_count')->nullable();
            
            $table->string('image_spa')->nullable();
            $table->string('spa_comment')->nullable();
            $table->string('spa_business_hours')->nullable();
            $table->string('spa_terms_of_use')->nullable();
            
            $table->string('image_open_spa')->nullable();
            $table->string('open_spa_comment')->nullable();
            $table->string('open_spa_business_hours')->nullable();
            $table->string('open_spa_terms_of_use')->nullable();
            
            $table->string('image_building')->nullable();
            $table->string('building_detail')->nullable();
            
            $table->string('image_event')->nullable();
            $table->string('event')->nullable();
           
            $table->string('settlement')->nullable();
            
            $table->string('check_in_out')->nullable();
           
            $table->string('barrier_free')->nullable();
            
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
        Schema::dropIfExists('hotels');
    }
}