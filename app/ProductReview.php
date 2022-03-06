<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductReview extends Model
{
    // リレーションシップ
    public function user() {
    return $this->belongsTo(\App\User::class, 'user_id', 'id')
            ->select('id', 'name');
}
}