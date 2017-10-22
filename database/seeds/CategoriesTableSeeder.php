<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert(['category_name' => "Genel",]);
        DB::table('categories')->insert(['category_name' => "PHP"]);
        DB::table('categories')->insert(['category_name' => "Tasarım"]);
    }
}
