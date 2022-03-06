<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HotelReview extends Model
{
    protected $guarded = array('id');
    

    public static $rules = array(
        'hotels_id' => 'required',
        'review_text' => 'required',
        
        
    ); //
}
