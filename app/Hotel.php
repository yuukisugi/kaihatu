<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    protected $guarded = array('id');

    // 以下を追記
    public static $rules = array(
        'name' => 'required|max:30',
        'reserve' => 'nullable',
        'hotelorryokan' => 'nullable',
        'todouhuken' => 'nullable',
        'address' => 'nullable|max:100',
        'access' => 'nullable|max:100',
        'parking' => 'nullable|max:100',
        
        'room_name' => 'nullable|max:100',
        'room_type' => 'nullable|max:100',
        'room_size' => 'nullable|max:100',
        'bet_size' => 'nullable|max:100',
        'equipment' => 'nullable|max:300',
        'amenities' => 'nullable|max:300',
        
        'room_name_2' => 'nullable|max:100',
        'room_type_2' => 'nullable|max:100',
        'room_size_2' => 'nullable|max:100',
        'bet_size_2' => 'nullable|max:100',
        'equipment_2' => 'nullable|max:300',
        'amenities_2' => 'nullable|max:300',
        
        'room_name_3' => 'nullable|max:100',
        'room_type_3' => 'nullable|max:100',
        'room_size_3' => 'nullable|max:100',
        'bet_size_3' => 'nullable|max:100',
        'equipment_3' => 'nullable|max:300',
        'amenities_3' => 'nullable|max:300',
        
        'total_room_count' => 'nullable|max:10',
        
        'spa_comment' => 'nullable|max:300',
        'spa_business_hours' => 'nullable|max:300',
        'spa_terms_of_use' => 'nullable|max:500',
        
        'open_spa_comment' => 'nullable|max:300',
        'open_spa_business_hours' => 'nullable|max:300',
        'spa_terms_of_use' => 'nullable|max:500',
        
        'building_detail' => 'nullable|max:300',
        
        'settlement' => 'nullable|max:300',
        
        'event' => 'nullable|max:100',
        
        'check_in_out' => 'nullable|max:100',
        
        'barrier_free' => 'nullable|max:100',
        
        
        
    );
     
     public function histories()
    {
        return $this->hasMany('App\History');

    }
}