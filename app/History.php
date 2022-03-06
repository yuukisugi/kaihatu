<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    protected $guarded = array('id');
    

    public static $rules = array(
        'hotels_id' => 'required',
        'restaurant_id' => 'required',
        'store_id' => 'required',
        // 'hotels_id' => 'required',
        'edited_at' => 'required',
        
        
    ); //
}
