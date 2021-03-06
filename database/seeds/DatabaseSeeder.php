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
        Eloquent::unguard();

        $this->call(ArticlesSeeder::class);
        $this->call(CategoriesSeeder::class);
        $this->call(PagesSeeder::class);

        Eloquent::reguard();
    }
}
