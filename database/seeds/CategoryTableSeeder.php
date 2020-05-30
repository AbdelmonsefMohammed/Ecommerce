<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name'  =>  'women',
            'slug'  =>  'women',
        ]);
        Category::create([
            'name'  =>  'men',
            'slug'  =>  'men',
        ]);
        Category::create([
            'name'  =>  'sports',
            'slug'  =>  'sports',
        ]);
        Category::create([
            'name'  =>  'electronics',
            'slug'  =>  'electronics',
        ]);
    }
}
