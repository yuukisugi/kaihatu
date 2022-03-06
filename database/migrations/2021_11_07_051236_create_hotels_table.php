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
            $table->string('hotelorryokan')->nullable();
            $table->string('image_main')->nullable();
            $table->string('todouhuken');
            $table->string('address');
            $table->string('access')->nullable();
            $table->string('parking')->nullable();
            $table->string('image_building')->nullable();
            $table->string('ja_room_count')->nullable();
            $table->string('we_room_count')->nullable();
            $table->string('ja_we_room_count')->nullable();
            $table->string('other_room_count')->nullable();
            $table->string('style_total_room_count')->nullable();
            $table->string('single')->nullable();
            $table->string('double')->nullable();
            $table->string('twin')->nullable();
            $table->string('sweet')->nullable();
            $table->string('capacity_total_room_count')->nullable();
            $table->string('room_detail')->nullable();
            $table->string('equipment')->nullable();
            $table->string('internet')->nullable();
            $table->string('image_spa')->nullable();
            $table->string('spa')->nullable();
            $table->string('open_spa')->nullable();
            $table->string('other_spa')->nullable();
            $table->string('spa_requirement')->nullable();
            $table->string('spa_requiremen')->nullable();
            $table->string('image_equipment')->nullable();
            $table->string('building_detail')->nullable();
            $table->string('service')->nullable();
            $table->string('settlement')->nullable();
            $table->string('check_in')->nullable();
            $table->string('check_out')->nullable();
            $table->string('hotel_detail')->nullable();
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