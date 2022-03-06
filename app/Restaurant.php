<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    protected $guarded = array('id');

    // 以下を追記
    public static $rules = array(
        'name' => 'required|max:30',
        // 'image_main' => 'nullable|image',
        'main_genre' => 'required',
        
        'sub_genre' => 'nullable',
        'todouhuken' => 'required|max:5',
        'address' => 'required|max:20',
        'parking' => 'nullable|regex:/^[a-zA-Z0-9]+$/|max:4',
        // 'image_building' => 'nullable|image',
        'usiness_hours' => 'nullable|max:100',
        'reserve' => 'nullable',
        'hp_url' => 'nullable|max:100',
        'inquiry' => 'nullable|max:100',
        'budget' => 'nullable|regex:/^[a-zA-Z0-9]+$/|max:5',
        'settlement' => 'nullable',
        'number_of_seats' => 'nullable|regex:/^[a-zA-Z0-9]+$/|max:4',
        'reserved' => 'nullable|max:100',
        'smoking' => 'nullable|max:100',
        'spatial_equipment' => 'nullable|max:100',
        
        'with_children' => 'nullable|max:100',
        'store_pr' => 'nullable|max:100',
        
    );
     public function histories()
    {
        return $this->hasMany('App\History');

    }
}
