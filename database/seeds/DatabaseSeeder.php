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
        // $this->call(UsersTableSeeder::class);
        $users = factory('App\User', 20)->create();
        $categories = factory('App\Category', 4)->create();
        $products = factory('App\Product', 30)->create();
    }
}
