<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        for($i = 1 ; $i <= 25 ; $i++) {

        $product = new \App\Product();
        $product->name = 'テスト商品名 - '. $i;
        $product->save();

    }
    }
}
