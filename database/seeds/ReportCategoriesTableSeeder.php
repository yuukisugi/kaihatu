<?php

use Illuminate\Database\Seeder;

class ReportCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
{
    // 違反内容
    $names = [
        100 => '暴力的なコンテンツ',
        200 => '差別的なコンテンツ',
        300 => '性的なコンテンツ',
        400 => '有害なコンテンツ',
        500 => 'スパム的なコンテンツ',
        999 => 'その他'
    ];

    foreach ($names as $id => $name) {

        $category = new \App\ReportCategory();
        $category->id = $id;
        $category->name = $name;
        $category->save();

    }

}
}
