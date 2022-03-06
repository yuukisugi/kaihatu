<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //$this->call(UsersTableSeeder::class);
    //  $this->call(ProductsTableSeeder::class); // 👈 追加
    //  $this->call(ReportCategoriesTableSeeder::class);
      DB::table('users')->insert([
            'name' => 'yuuki',
            'email' => 'sbc@mailaddress.com',
            'password' => bcrypt('88558855'),
            
        ]);
    }
}

// php artisan db:seed
