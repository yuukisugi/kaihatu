<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // リレーションシップ
    public function reviews() { // 👈 追加

        return $this->hasMany(\App\ProductReview::class, 'product_id', 'id');

    }
}
