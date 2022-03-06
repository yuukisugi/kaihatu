<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    protected $guarded = array('id');

    // 以下を追記
    public static $rules = array(
        'name' => 'required|max:30',
        // 'image_main' => 'nullable|image',
        'hotelorryokan' => 'required',
        'todouhuken' => 'required|max:5',
        'address' => 'required|max:20',
        'parking' => 'nullable|regex:/^[a-zA-Z0-9]+$/|max:4',
        // 'image_building' => 'nullable|image',
        'ja_room_count' => 'nullable|regex:/^[a-zA-Z0-9]+$/|max:3',
        'we_room_count' => 'nullable|regex:/^[a-zA-Z0-9]+$/|max:3',
        'ja_we_room_count' => 'nullable|regex:/^[a-zA-Z0-9]+$/|max:3',
        'other_room_count' => 'nullable|regex:/^[a-zA-Z0-9]+$/|max:3',
        'style_total_room_count' => 'nullable|regex:/^[a-zA-Z0-9]+$/|max:4',
        'single' => 'nullable|regex:/^[a-zA-Z0-9]+$/|max:3',
        'double' => 'nullable|regex:/^[a-zA-Z0-9]+$/|max:3',
        'twin' => 'nullable|regex:/^[a-zA-Z0-9]+$/|max:3',
        'sweet' => 'nullable|regex:/^[a-zA-Z0-9]+$/|max:3',
        'capacity_total_room_count' => 'nullable|regex:/^[a-zA-Z0-9]+$/|max:4',
        'room_detail' => 'nullable|max:100',
        'equipment' => 'nullable|max:100',
        'internet' => 'nullable|max:100',
        // 'image_spa' => 'nullable|image',
        'spa' => 'nullable|regex:/^[a-zA-Z0-9]+$/|max:3',
        'open_spa' => 'nullable|regex:/^[a-zA-Z0-9]+$/|max:3',
        'other_spa' => 'nullable|max:100',
        'spa_requirement' => 'nullable|max:100',
        // 'image_equipment' => 'nullable|image',
        'building_detail' => 'nullable|max:100',
        'service' => 'nullable|max:100',
        'settlement' => 'nullable|max:100',
        'check_in' => 'nullable|max:100',
        'hotel_detail' => 'nullable|max:100',
        'barrier_free' => 'nullable|max:100',
    );
     
     public function histories()
    {
        return $this->hasMany('App\History');

    }
}