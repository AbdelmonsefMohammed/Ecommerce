<?php
use App\Tag;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {   $this->call(CouponsTableSeeder::class);
        // $this->call(UsersTableSeeder::class);
        $this->call(CategoryTableSeeder::class);
        $this->call(TagsTableSeeder::class);
        $this->call(ProductsTableSeeder::class);


        // $users = factory('App\User', 20)->create();
        // $categories = factory('App\Category', 6)->create();
        // $tags = factory('App\Tag', 7)->create();
        // $products = factory('App\Product', 90)->create();

        // foreach($products as $product)
        // {
        //     $tags_ids = [];
        //     $tags_ids[] = Tag::all()->random()->id;
        //     $tags_ids[] = Tag::all()->random()->id;

        //     $product->tags()->sync($tags_ids);
        // }
    }
}
