<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //php artisan migrate:fresh --seed
        $this->call(CategoriesTableSeeder::class);
    }
}
