<?php

use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            ['id' => '1', 'title' => 'Php'],
            ['id' => '2', 'title' => 'Laravel'],
            ['id' => '3', 'title' => 'Js'],
            ['id' => '4', 'title' => 'Природа'],
            ['id' => '5', 'title' => 'Html'],
            ['id' => '6', 'title' => 'Необычные факты'],
        ]);
    }
}
