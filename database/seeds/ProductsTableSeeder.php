<?php

use Illuminate\Database\Seeder;
use App\Product;
class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'women model 1',
            'slug' => 'women-model-1',
            'details' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis animi, veritatis quae repudiandae quod nulla porro quidem, itaque quis quaerat!',
            'price' => '100',
            'rating'=> '4',
            'weight' => '50',
            'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, culpa!
                                Lorem ipsum dolor sit amet.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor qui eius esse!
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam, modi!
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum, iusto earum voluptates autem esse molestiae ipsam, atque quam amet similique ducimus aliquid voluptate perferendis, distinctio! 
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis ea, voluptas! Aliquam facere quas cumque rerum dolore impedit, dicta ducimus repellat dignissimos, fugiat, minima quaerat necessitatibus? Optio adipisci ab, obcaecati, porro unde accusantium facilis repudiandae.",
            'category_id' => 1,
            'featured' => false,
        ])->tags()->attach(1);
        $product = Product::find(1);
        $product->tags()->attach(2);

        Product::create([
            'name' => 'women model 2',
            'slug' => 'women-model-2',
            'details' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis animi, veritatis quae repudiandae quod nulla porro quidem, itaque quis quaerat!',
            'price' => '102',
            'rating'=> '4',
            'weight' => '50',
            'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, culpa!
                                Lorem ipsum dolor sit amet.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor qui eius esse!
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam, modi!
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum, iusto earum voluptates autem esse molestiae ipsam, atque quam amet similique ducimus aliquid voluptate perferendis, distinctio! 
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis ea, voluptas! Aliquam facere quas cumque rerum dolore impedit, dicta ducimus repellat dignissimos, fugiat, minima quaerat necessitatibus? Optio adipisci ab, obcaecati, porro unde accusantium facilis repudiandae.",
            'category_id' => 1,
            'featured' => false,
        ]);
        Product::create([
            'name' => 'women model 3',
            'slug' => 'women-model-3',
            'details' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis animi, veritatis quae repudiandae quod nulla porro quidem, itaque quis quaerat!',
            'price' => '90',
            'rating'=> '3',
            'weight' => '50',
            'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, culpa!
                                Lorem ipsum dolor sit amet.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor qui eius esse!
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam, modi!
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum, iusto earum voluptates autem esse molestiae ipsam, atque quam amet similique ducimus aliquid voluptate perferendis, distinctio! 
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis ea, voluptas! Aliquam facere quas cumque rerum dolore impedit, dicta ducimus repellat dignissimos, fugiat, minima quaerat necessitatibus? Optio adipisci ab, obcaecati, porro unde accusantium facilis repudiandae.",
            'category_id' => 1,
            'featured' => true,
        ]);
        Product::create([
            'name' => 'women model 4',
            'slug' => 'women-model-4',
            'details' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis animi, veritatis quae repudiandae quod nulla porro quidem, itaque quis quaerat!',
            'price' => '140',
            'rating'=> '4',
            'weight' => '50',
            'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, culpa!
                                Lorem ipsum dolor sit amet.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor qui eius esse!
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam, modi!
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum, iusto earum voluptates autem esse molestiae ipsam, atque quam amet similique ducimus aliquid voluptate perferendis, distinctio! 
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis ea, voluptas! Aliquam facere quas cumque rerum dolore impedit, dicta ducimus repellat dignissimos, fugiat, minima quaerat necessitatibus? Optio adipisci ab, obcaecati, porro unde accusantium facilis repudiandae.",
            'category_id' => 1,
            'featured' => true,
        ]);
        Product::create([
            'name' => 'women model 5',
            'slug' => 'women-model-5',
            'details' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis animi, veritatis quae repudiandae quod nulla porro quidem, itaque quis quaerat!',
            'price' => '140',
            'rating'=> '4',
            'weight' => '50',
            'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, culpa!
                                Lorem ipsum dolor sit amet.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor qui eius esse!
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam, modi!
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum, iusto earum voluptates autem esse molestiae ipsam, atque quam amet similique ducimus aliquid voluptate perferendis, distinctio! 
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis ea, voluptas! Aliquam facere quas cumque rerum dolore impedit, dicta ducimus repellat dignissimos, fugiat, minima quaerat necessitatibus? Optio adipisci ab, obcaecati, porro unde accusantium facilis repudiandae.",
            'category_id' => 1,
            'featured' => false,
        ]);
        Product::create([
            'name' => 'women model 6',
            'slug' => 'women-model-6',
            'details' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis animi, veritatis quae repudiandae quod nulla porro quidem, itaque quis quaerat!',
            'price' => '170',
            'rating'=> '4',
            'weight' => '50',
            'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, culpa!
                                Lorem ipsum dolor sit amet.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor qui eius esse!
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam, modi!
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum, iusto earum voluptates autem esse molestiae ipsam, atque quam amet similique ducimus aliquid voluptate perferendis, distinctio! 
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis ea, voluptas! Aliquam facere quas cumque rerum dolore impedit, dicta ducimus repellat dignissimos, fugiat, minima quaerat necessitatibus? Optio adipisci ab, obcaecati, porro unde accusantium facilis repudiandae.",
            'category_id' => 1,
            'featured' => false,
        ]);
        Product::create([
            'name' => 'women model 7',
            'slug' => 'women-model-7',
            'details' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis animi, veritatis quae repudiandae quod nulla porro quidem, itaque quis quaerat!',
            'price' => '300',
            'rating'=> '4',
            'weight' => '50',
            'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, culpa!
                                Lorem ipsum dolor sit amet.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor qui eius esse!
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam, modi!
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum, iusto earum voluptates autem esse molestiae ipsam, atque quam amet similique ducimus aliquid voluptate perferendis, distinctio! 
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis ea, voluptas! Aliquam facere quas cumque rerum dolore impedit, dicta ducimus repellat dignissimos, fugiat, minima quaerat necessitatibus? Optio adipisci ab, obcaecati, porro unde accusantium facilis repudiandae.",
            'category_id' => 1,
            'featured' => true,
        ]);
        Product::create([
            'name' => 'women model 8',
            'slug' => 'women-model-8',
            'details' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis animi, veritatis quae repudiandae quod nulla porro quidem, itaque quis quaerat!',
            'price' => '400',
            'rating'=> '3',
            'weight' => '70',
            'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, culpa!
                                Lorem ipsum dolor sit amet.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor qui eius esse!
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam, modi!
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum, iusto earum voluptates autem esse molestiae ipsam, atque quam amet similique ducimus aliquid voluptate perferendis, distinctio! 
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis ea, voluptas! Aliquam facere quas cumque rerum dolore impedit, dicta ducimus repellat dignissimos, fugiat, minima quaerat necessitatibus? Optio adipisci ab, obcaecati, porro unde accusantium facilis repudiandae.",
            'category_id' => 1,
            'featured' => true,
        ]);
        Product::create([
            'name' => 'women model 9',
            'slug' => 'women-model-9',
            'details' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis animi, veritatis quae repudiandae quod nulla porro quidem, itaque quis quaerat!',
            'price' => '80',
            'rating'=> '3',
            'weight' => '50',
            'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, culpa!
                                Lorem ipsum dolor sit amet.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor qui eius esse!
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam, modi!
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum, iusto earum voluptates autem esse molestiae ipsam, atque quam amet similique ducimus aliquid voluptate perferendis, distinctio! 
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis ea, voluptas! Aliquam facere quas cumque rerum dolore impedit, dicta ducimus repellat dignissimos, fugiat, minima quaerat necessitatibus? Optio adipisci ab, obcaecati, porro unde accusantium facilis repudiandae.",
            'category_id' => 1,
            'featured' => false,
        ]);
        Product::create([
            'name' => 'women model 10',
            'slug' => 'women-model-10',
            'details' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis animi, veritatis quae repudiandae quod nulla porro quidem, itaque quis quaerat!',
            'price' => '144',
            'rating'=> '5',
            'weight' => '50',
            'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, culpa!
                                Lorem ipsum dolor sit amet.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor qui eius esse!
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam, modi!
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum, iusto earum voluptates autem esse molestiae ipsam, atque quam amet similique ducimus aliquid voluptate perferendis, distinctio! 
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis ea, voluptas! Aliquam facere quas cumque rerum dolore impedit, dicta ducimus repellat dignissimos, fugiat, minima quaerat necessitatibus? Optio adipisci ab, obcaecati, porro unde accusantium facilis repudiandae.",
            'category_id' => 1,
            'featured' => false,
        ]);
        Product::create([
            'name' => 'women model 11',
            'slug' => 'women-model-11',
            'details' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis animi, veritatis quae repudiandae quod nulla porro quidem, itaque quis quaerat!',
            'price' => '166',
            'rating'=> '5',
            'weight' => '50',
            'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, culpa!
                                Lorem ipsum dolor sit amet.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor qui eius esse!
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam, modi!
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum, iusto earum voluptates autem esse molestiae ipsam, atque quam amet similique ducimus aliquid voluptate perferendis, distinctio! 
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis ea, voluptas! Aliquam facere quas cumque rerum dolore impedit, dicta ducimus repellat dignissimos, fugiat, minima quaerat necessitatibus? Optio adipisci ab, obcaecati, porro unde accusantium facilis repudiandae.",
            'category_id' => 1,
            'featured' => true,
        ]);
        Product::create([
            'name' => 'women model 12',
            'slug' => 'women-model-12',
            'details' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis animi, veritatis quae repudiandae quod nulla porro quidem, itaque quis quaerat!',
            'price' => '100',
            'rating'=> '4',
            'weight' => '50',
            'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, culpa!
                                Lorem ipsum dolor sit amet.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor qui eius esse!
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam, modi!
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum, iusto earum voluptates autem esse molestiae ipsam, atque quam amet similique ducimus aliquid voluptate perferendis, distinctio! 
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis ea, voluptas! Aliquam facere quas cumque rerum dolore impedit, dicta ducimus repellat dignissimos, fugiat, minima quaerat necessitatibus? Optio adipisci ab, obcaecati, porro unde accusantium facilis repudiandae.",
            'category_id' => 1,
            'featured' => false,
        ]);
        Product::create([
            'name' => 'women model 13',
            'slug' => 'women-model-13',
            'details' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis animi, veritatis quae repudiandae quod nulla porro quidem, itaque quis quaerat!',
            'price' => '200',
            'rating'=> '4',
            'weight' => '50',
            'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, culpa!
                                Lorem ipsum dolor sit amet.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor qui eius esse!
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam, modi!
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum, iusto earum voluptates autem esse molestiae ipsam, atque quam amet similique ducimus aliquid voluptate perferendis, distinctio! 
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis ea, voluptas! Aliquam facere quas cumque rerum dolore impedit, dicta ducimus repellat dignissimos, fugiat, minima quaerat necessitatibus? Optio adipisci ab, obcaecati, porro unde accusantium facilis repudiandae.",
            'category_id' => 1,
            'featured' => false,
        ]);
        Product::create([
            'name' => 'women model 14',
            'slug' => 'women-model-14',
            'details' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis animi, veritatis quae repudiandae quod nulla porro quidem, itaque quis quaerat!',
            'price' => '100',
            'rating'=> '4',
            'weight' => '50',
            'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, culpa!
                                Lorem ipsum dolor sit amet.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor qui eius esse!
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam, modi!
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum, iusto earum voluptates autem esse molestiae ipsam, atque quam amet similique ducimus aliquid voluptate perferendis, distinctio! 
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis ea, voluptas! Aliquam facere quas cumque rerum dolore impedit, dicta ducimus repellat dignissimos, fugiat, minima quaerat necessitatibus? Optio adipisci ab, obcaecati, porro unde accusantium facilis repudiandae.",
            'category_id' => 1,
            'featured' => false,
        ]);
        Product::create([
            'name' => 'women model 15',
            'slug' => 'women-model-15',
            'details' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis animi, veritatis quae repudiandae quod nulla porro quidem, itaque quis quaerat!',
            'price' => '160',
            'rating'=> '4',
            'weight' => '50',
            'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, culpa!
                                Lorem ipsum dolor sit amet.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor qui eius esse!
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam, modi!
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum, iusto earum voluptates autem esse molestiae ipsam, atque quam amet similique ducimus aliquid voluptate perferendis, distinctio! 
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis ea, voluptas! Aliquam facere quas cumque rerum dolore impedit, dicta ducimus repellat dignissimos, fugiat, minima quaerat necessitatibus? Optio adipisci ab, obcaecati, porro unde accusantium facilis repudiandae.",
            'category_id' => 1,
            'featured' => true,
        ]);
        Product::create([
            'name' => 'man model 1',
            'slug' => 'man-model-1',
            'details' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis animi, veritatis quae repudiandae quod nulla porro quidem, itaque quis quaerat!',
            'price' => '100',
            'rating'=> '4',
            'weight' => '50',
            'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, culpa!
                                Lorem ipsum dolor sit amet.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor qui eius esse!
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam, modi!
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum, iusto earum voluptates autem esse molestiae ipsam, atque quam amet similique ducimus aliquid voluptate perferendis, distinctio! 
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis ea, voluptas! Aliquam facere quas cumque rerum dolore impedit, dicta ducimus repellat dignissimos, fugiat, minima quaerat necessitatibus? Optio adipisci ab, obcaecati, porro unde accusantium facilis repudiandae.",
            'category_id' => 2,
            'featured' => false,
        ]);
        Product::create([
            'name' => 'man model 2',
            'slug' => 'man-model-2',
            'details' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis animi, veritatis quae repudiandae quod nulla porro quidem, itaque quis quaerat!',
            'price' => '102',
            'rating'=> '4',
            'weight' => '50',
            'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, culpa!
                                Lorem ipsum dolor sit amet.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor qui eius esse!
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam, modi!
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum, iusto earum voluptates autem esse molestiae ipsam, atque quam amet similique ducimus aliquid voluptate perferendis, distinctio! 
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis ea, voluptas! Aliquam facere quas cumque rerum dolore impedit, dicta ducimus repellat dignissimos, fugiat, minima quaerat necessitatibus? Optio adipisci ab, obcaecati, porro unde accusantium facilis repudiandae.",
            'category_id' => 2,
            'featured' => false,
        ]);
        Product::create([
            'name' => 'man model 3',
            'slug' => 'man-model-3',
            'details' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis animi, veritatis quae repudiandae quod nulla porro quidem, itaque quis quaerat!',
            'price' => '90',
            'rating'=> '3',
            'weight' => '50',
            'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, culpa!
                                Lorem ipsum dolor sit amet.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor qui eius esse!
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam, modi!
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum, iusto earum voluptates autem esse molestiae ipsam, atque quam amet similique ducimus aliquid voluptate perferendis, distinctio! 
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis ea, voluptas! Aliquam facere quas cumque rerum dolore impedit, dicta ducimus repellat dignissimos, fugiat, minima quaerat necessitatibus? Optio adipisci ab, obcaecati, porro unde accusantium facilis repudiandae.",
            'category_id' => 2,
            'featured' => true,
        ]);
        Product::create([
            'name' => 'man model 4',
            'slug' => 'man-model-4',
            'details' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis animi, veritatis quae repudiandae quod nulla porro quidem, itaque quis quaerat!',
            'price' => '140',
            'rating'=> '4',
            'weight' => '50',
            'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, culpa!
                                Lorem ipsum dolor sit amet.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor qui eius esse!
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam, modi!
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum, iusto earum voluptates autem esse molestiae ipsam, atque quam amet similique ducimus aliquid voluptate perferendis, distinctio! 
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis ea, voluptas! Aliquam facere quas cumque rerum dolore impedit, dicta ducimus repellat dignissimos, fugiat, minima quaerat necessitatibus? Optio adipisci ab, obcaecati, porro unde accusantium facilis repudiandae.",
            'category_id' => 2,
            'featured' => true,
        ]);
        Product::create([
            'name' => 'man model 5',
            'slug' => 'man-model-5',
            'details' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis animi, veritatis quae repudiandae quod nulla porro quidem, itaque quis quaerat!',
            'price' => '140',
            'rating'=> '4',
            'weight' => '50',
            'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, culpa!
                                Lorem ipsum dolor sit amet.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor qui eius esse!
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam, modi!
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum, iusto earum voluptates autem esse molestiae ipsam, atque quam amet similique ducimus aliquid voluptate perferendis, distinctio! 
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis ea, voluptas! Aliquam facere quas cumque rerum dolore impedit, dicta ducimus repellat dignissimos, fugiat, minima quaerat necessitatibus? Optio adipisci ab, obcaecati, porro unde accusantium facilis repudiandae.",
            'category_id' => 2,
            'featured' => false,
        ]);
        Product::create([
            'name' => 'man model 6',
            'slug' => 'man-model-6',
            'details' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis animi, veritatis quae repudiandae quod nulla porro quidem, itaque quis quaerat!',
            'price' => '170',
            'rating'=> '4',
            'weight' => '50',
            'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, culpa!
                                Lorem ipsum dolor sit amet.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor qui eius esse!
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam, modi!
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum, iusto earum voluptates autem esse molestiae ipsam, atque quam amet similique ducimus aliquid voluptate perferendis, distinctio! 
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis ea, voluptas! Aliquam facere quas cumque rerum dolore impedit, dicta ducimus repellat dignissimos, fugiat, minima quaerat necessitatibus? Optio adipisci ab, obcaecati, porro unde accusantium facilis repudiandae.",
            'category_id' => 2,
            'featured' => false,
        ]);
        Product::create([
            'name' => 'man model 7',
            'slug' => 'man-model-7',
            'details' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis animi, veritatis quae repudiandae quod nulla porro quidem, itaque quis quaerat!',
            'price' => '300',
            'rating'=> '4',
            'weight' => '50',
            'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, culpa!
                                Lorem ipsum dolor sit amet.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor qui eius esse!
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam, modi!
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum, iusto earum voluptates autem esse molestiae ipsam, atque quam amet similique ducimus aliquid voluptate perferendis, distinctio! 
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis ea, voluptas! Aliquam facere quas cumque rerum dolore impedit, dicta ducimus repellat dignissimos, fugiat, minima quaerat necessitatibus? Optio adipisci ab, obcaecati, porro unde accusantium facilis repudiandae.",
            'category_id' => 2,
            'featured' => true,
        ]);
        Product::create([
            'name' => 'man model 8',
            'slug' => 'man-model-8',
            'details' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis animi, veritatis quae repudiandae quod nulla porro quidem, itaque quis quaerat!',
            'price' => '400',
            'rating'=> '3',
            'weight' => '70',
            'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, culpa!
                                Lorem ipsum dolor sit amet.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor qui eius esse!
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam, modi!
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum, iusto earum voluptates autem esse molestiae ipsam, atque quam amet similique ducimus aliquid voluptate perferendis, distinctio! 
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis ea, voluptas! Aliquam facere quas cumque rerum dolore impedit, dicta ducimus repellat dignissimos, fugiat, minima quaerat necessitatibus? Optio adipisci ab, obcaecati, porro unde accusantium facilis repudiandae.",
            'category_id' => 2,
            'featured' => true,
        ]);
        Product::create([
            'name' => 'man model 9',
            'slug' => 'man-model-9',
            'details' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis animi, veritatis quae repudiandae quod nulla porro quidem, itaque quis quaerat!',
            'price' => '80',
            'rating'=> '3',
            'weight' => '50',
            'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, culpa!
                                Lorem ipsum dolor sit amet.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor qui eius esse!
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam, modi!
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum, iusto earum voluptates autem esse molestiae ipsam, atque quam amet similique ducimus aliquid voluptate perferendis, distinctio! 
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis ea, voluptas! Aliquam facere quas cumque rerum dolore impedit, dicta ducimus repellat dignissimos, fugiat, minima quaerat necessitatibus? Optio adipisci ab, obcaecati, porro unde accusantium facilis repudiandae.",
            'category_id' => 2,
            'featured' => false,
        ]);
        Product::create([
            'name' => 'man model 10',
            'slug' => 'man-model-10',
            'details' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis animi, veritatis quae repudiandae quod nulla porro quidem, itaque quis quaerat!',
            'price' => '144',
            'rating'=> '5',
            'weight' => '50',
            'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, culpa!
                                Lorem ipsum dolor sit amet.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor qui eius esse!
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam, modi!
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum, iusto earum voluptates autem esse molestiae ipsam, atque quam amet similique ducimus aliquid voluptate perferendis, distinctio! 
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis ea, voluptas! Aliquam facere quas cumque rerum dolore impedit, dicta ducimus repellat dignissimos, fugiat, minima quaerat necessitatibus? Optio adipisci ab, obcaecati, porro unde accusantium facilis repudiandae.",
            'category_id' => 2,
            'featured' => false,
        ]);
        Product::create([
            'name' => 'man model 11',
            'slug' => 'man-model-11',
            'details' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis animi, veritatis quae repudiandae quod nulla porro quidem, itaque quis quaerat!',
            'price' => '166',
            'rating'=> '5',
            'weight' => '50',
            'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, culpa!
                                Lorem ipsum dolor sit amet.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor qui eius esse!
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam, modi!
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum, iusto earum voluptates autem esse molestiae ipsam, atque quam amet similique ducimus aliquid voluptate perferendis, distinctio! 
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis ea, voluptas! Aliquam facere quas cumque rerum dolore impedit, dicta ducimus repellat dignissimos, fugiat, minima quaerat necessitatibus? Optio adipisci ab, obcaecati, porro unde accusantium facilis repudiandae.",
            'category_id' => 2,
            'featured' => true,
        ]);
        Product::create([
            'name' => 'man model 12',
            'slug' => 'man-model-12',
            'details' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis animi, veritatis quae repudiandae quod nulla porro quidem, itaque quis quaerat!',
            'price' => '100',
            'rating'=> '4',
            'weight' => '50',
            'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, culpa!
                                Lorem ipsum dolor sit amet.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor qui eius esse!
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam, modi!
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum, iusto earum voluptates autem esse molestiae ipsam, atque quam amet similique ducimus aliquid voluptate perferendis, distinctio! 
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis ea, voluptas! Aliquam facere quas cumque rerum dolore impedit, dicta ducimus repellat dignissimos, fugiat, minima quaerat necessitatibus? Optio adipisci ab, obcaecati, porro unde accusantium facilis repudiandae.",
            'category_id' => 2,
            'featured' => false,
        ]);
        Product::create([
            'name' => 'man model 13',
            'slug' => 'man-model-13',
            'details' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis animi, veritatis quae repudiandae quod nulla porro quidem, itaque quis quaerat!',
            'price' => '200',
            'rating'=> '4',
            'weight' => '50',
            'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, culpa!
                                Lorem ipsum dolor sit amet.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor qui eius esse!
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam, modi!
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum, iusto earum voluptates autem esse molestiae ipsam, atque quam amet similique ducimus aliquid voluptate perferendis, distinctio! 
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis ea, voluptas! Aliquam facere quas cumque rerum dolore impedit, dicta ducimus repellat dignissimos, fugiat, minima quaerat necessitatibus? Optio adipisci ab, obcaecati, porro unde accusantium facilis repudiandae.",
            'category_id' => 2,
            'featured' => false,
        ]);
        Product::create([
            'name' => 'man model 14',
            'slug' => 'man-model-14',
            'details' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis animi, veritatis quae repudiandae quod nulla porro quidem, itaque quis quaerat!',
            'price' => '100',
            'rating'=> '4',
            'weight' => '50',
            'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, culpa!
                                Lorem ipsum dolor sit amet.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor qui eius esse!
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam, modi!
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum, iusto earum voluptates autem esse molestiae ipsam, atque quam amet similique ducimus aliquid voluptate perferendis, distinctio! 
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis ea, voluptas! Aliquam facere quas cumque rerum dolore impedit, dicta ducimus repellat dignissimos, fugiat, minima quaerat necessitatibus? Optio adipisci ab, obcaecati, porro unde accusantium facilis repudiandae.",
            'category_id' => 2,
            'featured' => false,
        ]);
        Product::create([
            'name' => 'man model 15',
            'slug' => 'man-model-15',
            'details' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis animi, veritatis quae repudiandae quod nulla porro quidem, itaque quis quaerat!',
            'price' => '160',
            'rating'=> '4',
            'weight' => '50',
            'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, culpa!
                                Lorem ipsum dolor sit amet.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor qui eius esse!
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam, modi!
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum, iusto earum voluptates autem esse molestiae ipsam, atque quam amet similique ducimus aliquid voluptate perferendis, distinctio! 
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis ea, voluptas! Aliquam facere quas cumque rerum dolore impedit, dicta ducimus repellat dignissimos, fugiat, minima quaerat necessitatibus? Optio adipisci ab, obcaecati, porro unde accusantium facilis repudiandae.",
            'category_id' => 2,
            'featured' => true,
        ]);
        Product::create([
            'name' => 'sport model 1',
            'slug' => 'sport-model-1',
            'details' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis animi, veritatis quae repudiandae quod nulla porro quidem, itaque quis quaerat!',
            'price' => '100',
            'rating'=> '4',
            'weight' => '50',
            'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, culpa!
                                Lorem ipsum dolor sit amet.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor qui eius esse!
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam, modi!
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum, iusto earum voluptates autem esse molestiae ipsam, atque quam amet similique ducimus aliquid voluptate perferendis, distinctio! 
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis ea, voluptas! Aliquam facere quas cumque rerum dolore impedit, dicta ducimus repellat dignissimos, fugiat, minima quaerat necessitatibus? Optio adipisci ab, obcaecati, porro unde accusantium facilis repudiandae.",
            'category_id' => 3,
            'featured' => false,
        ]);
        Product::create([
            'name' => 'sport model 2',
            'slug' => 'sport-model-2',
            'details' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis animi, veritatis quae repudiandae quod nulla porro quidem, itaque quis quaerat!',
            'price' => '102',
            'rating'=> '4',
            'weight' => '50',
            'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, culpa!
                                Lorem ipsum dolor sit amet.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor qui eius esse!
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam, modi!
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum, iusto earum voluptates autem esse molestiae ipsam, atque quam amet similique ducimus aliquid voluptate perferendis, distinctio! 
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis ea, voluptas! Aliquam facere quas cumque rerum dolore impedit, dicta ducimus repellat dignissimos, fugiat, minima quaerat necessitatibus? Optio adipisci ab, obcaecati, porro unde accusantium facilis repudiandae.",
            'category_id' => 3,
            'featured' => false,
        ]);
        Product::create([
            'name' => 'sport model 3',
            'slug' => 'sport-model-3',
            'details' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis animi, veritatis quae repudiandae quod nulla porro quidem, itaque quis quaerat!',
            'price' => '90',
            'rating'=> '3',
            'weight' => '50',
            'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, culpa!
                                Lorem ipsum dolor sit amet.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor qui eius esse!
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam, modi!
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum, iusto earum voluptates autem esse molestiae ipsam, atque quam amet similique ducimus aliquid voluptate perferendis, distinctio! 
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis ea, voluptas! Aliquam facere quas cumque rerum dolore impedit, dicta ducimus repellat dignissimos, fugiat, minima quaerat necessitatibus? Optio adipisci ab, obcaecati, porro unde accusantium facilis repudiandae.",
            'category_id' => 3,
            'featured' => true,
        ]);
        Product::create([
            'name' => 'sport model 4',
            'slug' => 'sport-model-4',
            'details' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis animi, veritatis quae repudiandae quod nulla porro quidem, itaque quis quaerat!',
            'price' => '140',
            'rating'=> '4',
            'weight' => '50',
            'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, culpa!
                                Lorem ipsum dolor sit amet.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor qui eius esse!
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam, modi!
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum, iusto earum voluptates autem esse molestiae ipsam, atque quam amet similique ducimus aliquid voluptate perferendis, distinctio! 
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis ea, voluptas! Aliquam facere quas cumque rerum dolore impedit, dicta ducimus repellat dignissimos, fugiat, minima quaerat necessitatibus? Optio adipisci ab, obcaecati, porro unde accusantium facilis repudiandae.",
            'category_id' => 3,
            'featured' => true,
        ]);
        Product::create([
            'name' => 'sport model 5',
            'slug' => 'sport-model-5',
            'details' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis animi, veritatis quae repudiandae quod nulla porro quidem, itaque quis quaerat!',
            'price' => '140',
            'rating'=> '4',
            'weight' => '50',
            'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, culpa!
                                Lorem ipsum dolor sit amet.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor qui eius esse!
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam, modi!
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum, iusto earum voluptates autem esse molestiae ipsam, atque quam amet similique ducimus aliquid voluptate perferendis, distinctio! 
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis ea, voluptas! Aliquam facere quas cumque rerum dolore impedit, dicta ducimus repellat dignissimos, fugiat, minima quaerat necessitatibus? Optio adipisci ab, obcaecati, porro unde accusantium facilis repudiandae.",
            'category_id' => 3,
            'featured' => false,
        ]);
        Product::create([
            'name' => 'sport model 6',
            'slug' => 'sport-model-6',
            'details' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis animi, veritatis quae repudiandae quod nulla porro quidem, itaque quis quaerat!',
            'price' => '170',
            'rating'=> '4',
            'weight' => '50',
            'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, culpa!
                                Lorem ipsum dolor sit amet.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor qui eius esse!
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam, modi!
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum, iusto earum voluptates autem esse molestiae ipsam, atque quam amet similique ducimus aliquid voluptate perferendis, distinctio! 
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis ea, voluptas! Aliquam facere quas cumque rerum dolore impedit, dicta ducimus repellat dignissimos, fugiat, minima quaerat necessitatibus? Optio adipisci ab, obcaecati, porro unde accusantium facilis repudiandae.",
            'category_id' => 3,
            'featured' => false,
        ]);
        Product::create([
            'name' => 'sport model 7',
            'slug' => 'sport-model-7',
            'details' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis animi, veritatis quae repudiandae quod nulla porro quidem, itaque quis quaerat!',
            'price' => '300',
            'rating'=> '4',
            'weight' => '50',
            'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, culpa!
                                Lorem ipsum dolor sit amet.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor qui eius esse!
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam, modi!
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum, iusto earum voluptates autem esse molestiae ipsam, atque quam amet similique ducimus aliquid voluptate perferendis, distinctio! 
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis ea, voluptas! Aliquam facere quas cumque rerum dolore impedit, dicta ducimus repellat dignissimos, fugiat, minima quaerat necessitatibus? Optio adipisci ab, obcaecati, porro unde accusantium facilis repudiandae.",
            'category_id' => 3,
            'featured' => true,
        ]);
        Product::create([
            'name' => 'sport model 8',
            'slug' => 'sport-model-8',
            'details' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis animi, veritatis quae repudiandae quod nulla porro quidem, itaque quis quaerat!',
            'price' => '400',
            'rating'=> '3',
            'weight' => '70',
            'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, culpa!
                                Lorem ipsum dolor sit amet.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor qui eius esse!
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam, modi!
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum, iusto earum voluptates autem esse molestiae ipsam, atque quam amet similique ducimus aliquid voluptate perferendis, distinctio! 
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis ea, voluptas! Aliquam facere quas cumque rerum dolore impedit, dicta ducimus repellat dignissimos, fugiat, minima quaerat necessitatibus? Optio adipisci ab, obcaecati, porro unde accusantium facilis repudiandae.",
            'category_id' => 3,
            'featured' => true,
        ]);
        Product::create([
            'name' => 'sport model 9',
            'slug' => 'sport-model-9',
            'details' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis animi, veritatis quae repudiandae quod nulla porro quidem, itaque quis quaerat!',
            'price' => '80',
            'rating'=> '3',
            'weight' => '50',
            'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, culpa!
                                Lorem ipsum dolor sit amet.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor qui eius esse!
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam, modi!
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum, iusto earum voluptates autem esse molestiae ipsam, atque quam amet similique ducimus aliquid voluptate perferendis, distinctio! 
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis ea, voluptas! Aliquam facere quas cumque rerum dolore impedit, dicta ducimus repellat dignissimos, fugiat, minima quaerat necessitatibus? Optio adipisci ab, obcaecati, porro unde accusantium facilis repudiandae.",
            'category_id' => 3,
            'featured' => false,
        ]);
        Product::create([
            'name' => 'sport model 10',
            'slug' => 'sport-model-10',
            'details' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis animi, veritatis quae repudiandae quod nulla porro quidem, itaque quis quaerat!',
            'price' => '144',
            'rating'=> '5',
            'weight' => '50',
            'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, culpa!
                                Lorem ipsum dolor sit amet.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor qui eius esse!
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam, modi!
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum, iusto earum voluptates autem esse molestiae ipsam, atque quam amet similique ducimus aliquid voluptate perferendis, distinctio! 
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis ea, voluptas! Aliquam facere quas cumque rerum dolore impedit, dicta ducimus repellat dignissimos, fugiat, minima quaerat necessitatibus? Optio adipisci ab, obcaecati, porro unde accusantium facilis repudiandae.",
            'category_id' => 3,
            'featured' => false,
        ]);
        Product::create([
            'name' => 'sport model 11',
            'slug' => 'sport-model-11',
            'details' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis animi, veritatis quae repudiandae quod nulla porro quidem, itaque quis quaerat!',
            'price' => '166',
            'rating'=> '5',
            'weight' => '50',
            'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, culpa!
                                Lorem ipsum dolor sit amet.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor qui eius esse!
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam, modi!
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum, iusto earum voluptates autem esse molestiae ipsam, atque quam amet similique ducimus aliquid voluptate perferendis, distinctio! 
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis ea, voluptas! Aliquam facere quas cumque rerum dolore impedit, dicta ducimus repellat dignissimos, fugiat, minima quaerat necessitatibus? Optio adipisci ab, obcaecati, porro unde accusantium facilis repudiandae.",
            'category_id' => 3,
            'featured' => true,
        ]);
        Product::create([
            'name' => 'sport model 12',
            'slug' => 'sport-model-12',
            'details' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis animi, veritatis quae repudiandae quod nulla porro quidem, itaque quis quaerat!',
            'price' => '100',
            'rating'=> '4',
            'weight' => '50',
            'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, culpa!
                                Lorem ipsum dolor sit amet.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor qui eius esse!
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam, modi!
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum, iusto earum voluptates autem esse molestiae ipsam, atque quam amet similique ducimus aliquid voluptate perferendis, distinctio! 
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis ea, voluptas! Aliquam facere quas cumque rerum dolore impedit, dicta ducimus repellat dignissimos, fugiat, minima quaerat necessitatibus? Optio adipisci ab, obcaecati, porro unde accusantium facilis repudiandae.",
            'category_id' => 3,
            'featured' => false,
        ]);
        Product::create([
            'name' => 'sport model 13',
            'slug' => 'sport-model-13',
            'details' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis animi, veritatis quae repudiandae quod nulla porro quidem, itaque quis quaerat!',
            'price' => '200',
            'rating'=> '4',
            'weight' => '50',
            'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, culpa!
                                Lorem ipsum dolor sit amet.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor qui eius esse!
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam, modi!
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum, iusto earum voluptates autem esse molestiae ipsam, atque quam amet similique ducimus aliquid voluptate perferendis, distinctio! 
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis ea, voluptas! Aliquam facere quas cumque rerum dolore impedit, dicta ducimus repellat dignissimos, fugiat, minima quaerat necessitatibus? Optio adipisci ab, obcaecati, porro unde accusantium facilis repudiandae.",
            'category_id' => 3,
            'featured' => false,
        ]);
        Product::create([
            'name' => 'sport model 14',
            'slug' => 'sport-model-14',
            'details' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis animi, veritatis quae repudiandae quod nulla porro quidem, itaque quis quaerat!',
            'price' => '100',
            'rating'=> '4',
            'weight' => '50',
            'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, culpa!
                                Lorem ipsum dolor sit amet.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor qui eius esse!
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam, modi!
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum, iusto earum voluptates autem esse molestiae ipsam, atque quam amet similique ducimus aliquid voluptate perferendis, distinctio! 
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis ea, voluptas! Aliquam facere quas cumque rerum dolore impedit, dicta ducimus repellat dignissimos, fugiat, minima quaerat necessitatibus? Optio adipisci ab, obcaecati, porro unde accusantium facilis repudiandae.",
            'category_id' => 3,
            'featured' => false,
        ]);
        Product::create([
            'name' => 'sport model 15',
            'slug' => 'sport-model-15',
            'details' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis animi, veritatis quae repudiandae quod nulla porro quidem, itaque quis quaerat!',
            'price' => '160',
            'rating'=> '4',
            'weight' => '50',
            'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, culpa!
                                Lorem ipsum dolor sit amet.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor qui eius esse!
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam, modi!
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum, iusto earum voluptates autem esse molestiae ipsam, atque quam amet similique ducimus aliquid voluptate perferendis, distinctio! 
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis ea, voluptas! Aliquam facere quas cumque rerum dolore impedit, dicta ducimus repellat dignissimos, fugiat, minima quaerat necessitatibus? Optio adipisci ab, obcaecati, porro unde accusantium facilis repudiandae.",
            'category_id' => 3,
            'featured' => true,
        ]);
        Product::create([
            'name' => 'electronics model 1',
            'slug' => 'electronics-model-1',
            'details' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis animi, veritatis quae repudiandae quod nulla porro quidem, itaque quis quaerat!',
            'price' => '100',
            'rating'=> '4',
            'weight' => '50',
            'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, culpa!
                                Lorem ipsum dolor sit amet.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor qui eius esse!
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam, modi!
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum, iusto earum voluptates autem esse molestiae ipsam, atque quam amet similique ducimus aliquid voluptate perferendis, distinctio! 
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis ea, voluptas! Aliquam facere quas cumque rerum dolore impedit, dicta ducimus repellat dignissimos, fugiat, minima quaerat necessitatibus? Optio adipisci ab, obcaecati, porro unde accusantium facilis repudiandae.",
            'category_id' => 4,
            'featured' => false,
        ]);
        Product::create([
            'name' => 'electronics model 2',
            'slug' => 'electronics-model-2',
            'details' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis animi, veritatis quae repudiandae quod nulla porro quidem, itaque quis quaerat!',
            'price' => '102',
            'rating'=> '4',
            'weight' => '50',
            'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, culpa!
                                Lorem ipsum dolor sit amet.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor qui eius esse!
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam, modi!
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum, iusto earum voluptates autem esse molestiae ipsam, atque quam amet similique ducimus aliquid voluptate perferendis, distinctio! 
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis ea, voluptas! Aliquam facere quas cumque rerum dolore impedit, dicta ducimus repellat dignissimos, fugiat, minima quaerat necessitatibus? Optio adipisci ab, obcaecati, porro unde accusantium facilis repudiandae.",
            'category_id' => 4,
            'featured' => false,
        ]);
        Product::create([
            'name' => 'electronics model 3',
            'slug' => 'electronics-model-3',
            'details' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis animi, veritatis quae repudiandae quod nulla porro quidem, itaque quis quaerat!',
            'price' => '90',
            'rating'=> '3',
            'weight' => '50',
            'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, culpa!
                                Lorem ipsum dolor sit amet.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor qui eius esse!
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam, modi!
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum, iusto earum voluptates autem esse molestiae ipsam, atque quam amet similique ducimus aliquid voluptate perferendis, distinctio! 
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis ea, voluptas! Aliquam facere quas cumque rerum dolore impedit, dicta ducimus repellat dignissimos, fugiat, minima quaerat necessitatibus? Optio adipisci ab, obcaecati, porro unde accusantium facilis repudiandae.",
            'category_id' => 4,
            'featured' => true,
        ]);
        Product::create([
            'name' => 'electronics model 4',
            'slug' => 'electronics-model-4',
            'details' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis animi, veritatis quae repudiandae quod nulla porro quidem, itaque quis quaerat!',
            'price' => '140',
            'rating'=> '4',
            'weight' => '50',
            'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, culpa!
                                Lorem ipsum dolor sit amet.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor qui eius esse!
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam, modi!
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum, iusto earum voluptates autem esse molestiae ipsam, atque quam amet similique ducimus aliquid voluptate perferendis, distinctio! 
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis ea, voluptas! Aliquam facere quas cumque rerum dolore impedit, dicta ducimus repellat dignissimos, fugiat, minima quaerat necessitatibus? Optio adipisci ab, obcaecati, porro unde accusantium facilis repudiandae.",
            'category_id' => 4,
            'featured' => true,
        ]);
        Product::create([
            'name' => 'electronics model 5',
            'slug' => 'electronics-model-5',
            'details' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis animi, veritatis quae repudiandae quod nulla porro quidem, itaque quis quaerat!',
            'price' => '140',
            'rating'=> '4',
            'weight' => '50',
            'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, culpa!
                                Lorem ipsum dolor sit amet.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor qui eius esse!
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam, modi!
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum, iusto earum voluptates autem esse molestiae ipsam, atque quam amet similique ducimus aliquid voluptate perferendis, distinctio! 
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis ea, voluptas! Aliquam facere quas cumque rerum dolore impedit, dicta ducimus repellat dignissimos, fugiat, minima quaerat necessitatibus? Optio adipisci ab, obcaecati, porro unde accusantium facilis repudiandae.",
            'category_id' => 4,
            'featured' => false,
        ]);
        Product::create([
            'name' => 'electronics model 6',
            'slug' => 'electronics-model-6',
            'details' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis animi, veritatis quae repudiandae quod nulla porro quidem, itaque quis quaerat!',
            'price' => '170',
            'rating'=> '4',
            'weight' => '50',
            'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, culpa!
                                Lorem ipsum dolor sit amet.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor qui eius esse!
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam, modi!
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum, iusto earum voluptates autem esse molestiae ipsam, atque quam amet similique ducimus aliquid voluptate perferendis, distinctio! 
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis ea, voluptas! Aliquam facere quas cumque rerum dolore impedit, dicta ducimus repellat dignissimos, fugiat, minima quaerat necessitatibus? Optio adipisci ab, obcaecati, porro unde accusantium facilis repudiandae.",
            'category_id' => 4,
            'featured' => false,
        ]);
        Product::create([
            'name' => 'electronics model 7',
            'slug' => 'electronics-model-7',
            'details' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis animi, veritatis quae repudiandae quod nulla porro quidem, itaque quis quaerat!',
            'price' => '300',
            'rating'=> '4',
            'weight' => '50',
            'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, culpa!
                                Lorem ipsum dolor sit amet.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor qui eius esse!
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam, modi!
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum, iusto earum voluptates autem esse molestiae ipsam, atque quam amet similique ducimus aliquid voluptate perferendis, distinctio! 
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis ea, voluptas! Aliquam facere quas cumque rerum dolore impedit, dicta ducimus repellat dignissimos, fugiat, minima quaerat necessitatibus? Optio adipisci ab, obcaecati, porro unde accusantium facilis repudiandae.",
            'category_id' => 4,
            'featured' => true,
        ]);
        Product::create([
            'name' => 'electronics model 8',
            'slug' => 'electronics-model-8',
            'details' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis animi, veritatis quae repudiandae quod nulla porro quidem, itaque quis quaerat!',
            'price' => '400',
            'rating'=> '3',
            'weight' => '70',
            'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, culpa!
                                Lorem ipsum dolor sit amet.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor qui eius esse!
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam, modi!
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum, iusto earum voluptates autem esse molestiae ipsam, atque quam amet similique ducimus aliquid voluptate perferendis, distinctio! 
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis ea, voluptas! Aliquam facere quas cumque rerum dolore impedit, dicta ducimus repellat dignissimos, fugiat, minima quaerat necessitatibus? Optio adipisci ab, obcaecati, porro unde accusantium facilis repudiandae.",
            'category_id' => 4,
            'featured' => true,
        ]);
        Product::create([
            'name' => 'electronics model 9',
            'slug' => 'electronics-model-9',
            'details' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis animi, veritatis quae repudiandae quod nulla porro quidem, itaque quis quaerat!',
            'price' => '80',
            'rating'=> '3',
            'weight' => '50',
            'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, culpa!
                                Lorem ipsum dolor sit amet.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor qui eius esse!
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam, modi!
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum, iusto earum voluptates autem esse molestiae ipsam, atque quam amet similique ducimus aliquid voluptate perferendis, distinctio! 
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis ea, voluptas! Aliquam facere quas cumque rerum dolore impedit, dicta ducimus repellat dignissimos, fugiat, minima quaerat necessitatibus? Optio adipisci ab, obcaecati, porro unde accusantium facilis repudiandae.",
            'category_id' => 4,
            'featured' => false,
        ]);
        Product::create([
            'name' => 'electronics model 10',
            'slug' => 'electronics-model-10',
            'details' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis animi, veritatis quae repudiandae quod nulla porro quidem, itaque quis quaerat!',
            'price' => '144',
            'rating'=> '5',
            'weight' => '50',
            'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, culpa!
                                Lorem ipsum dolor sit amet.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor qui eius esse!
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam, modi!
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum, iusto earum voluptates autem esse molestiae ipsam, atque quam amet similique ducimus aliquid voluptate perferendis, distinctio! 
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis ea, voluptas! Aliquam facere quas cumque rerum dolore impedit, dicta ducimus repellat dignissimos, fugiat, minima quaerat necessitatibus? Optio adipisci ab, obcaecati, porro unde accusantium facilis repudiandae.",
            'category_id' => 4,
            'featured' => false,
        ]);
        Product::create([
            'name' => 'electronics model 11',
            'slug' => 'electronics-model-11',
            'details' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis animi, veritatis quae repudiandae quod nulla porro quidem, itaque quis quaerat!',
            'price' => '166',
            'rating'=> '5',
            'weight' => '50',
            'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, culpa!
                                Lorem ipsum dolor sit amet.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor qui eius esse!
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam, modi!
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum, iusto earum voluptates autem esse molestiae ipsam, atque quam amet similique ducimus aliquid voluptate perferendis, distinctio! 
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis ea, voluptas! Aliquam facere quas cumque rerum dolore impedit, dicta ducimus repellat dignissimos, fugiat, minima quaerat necessitatibus? Optio adipisci ab, obcaecati, porro unde accusantium facilis repudiandae.",
            'category_id' => 4,
            'featured' => true,
        ]);
        Product::create([
            'name' => 'electronics model 12',
            'slug' => 'electronics-model-12',
            'details' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis animi, veritatis quae repudiandae quod nulla porro quidem, itaque quis quaerat!',
            'price' => '100',
            'rating'=> '4',
            'weight' => '50',
            'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, culpa!
                                Lorem ipsum dolor sit amet.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor qui eius esse!
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam, modi!
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum, iusto earum voluptates autem esse molestiae ipsam, atque quam amet similique ducimus aliquid voluptate perferendis, distinctio! 
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis ea, voluptas! Aliquam facere quas cumque rerum dolore impedit, dicta ducimus repellat dignissimos, fugiat, minima quaerat necessitatibus? Optio adipisci ab, obcaecati, porro unde accusantium facilis repudiandae.",
            'category_id' => 4,
            'featured' => false,
        ]);
        Product::create([
            'name' => 'electronics model 13',
            'slug' => 'electronics-model-13',
            'details' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis animi, veritatis quae repudiandae quod nulla porro quidem, itaque quis quaerat!',
            'price' => '200',
            'rating'=> '4',
            'weight' => '50',
            'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, culpa!
                                Lorem ipsum dolor sit amet.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor qui eius esse!
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam, modi!
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum, iusto earum voluptates autem esse molestiae ipsam, atque quam amet similique ducimus aliquid voluptate perferendis, distinctio! 
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis ea, voluptas! Aliquam facere quas cumque rerum dolore impedit, dicta ducimus repellat dignissimos, fugiat, minima quaerat necessitatibus? Optio adipisci ab, obcaecati, porro unde accusantium facilis repudiandae.",
            'category_id' => 4,
            'featured' => false,
        ]);
        Product::create([
            'name' => 'electronics model 14',
            'slug' => 'electronics-model-14',
            'details' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis animi, veritatis quae repudiandae quod nulla porro quidem, itaque quis quaerat!',
            'price' => '100',
            'rating'=> '4',
            'weight' => '50',
            'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, culpa!
                                Lorem ipsum dolor sit amet.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor qui eius esse!
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam, modi!
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum, iusto earum voluptates autem esse molestiae ipsam, atque quam amet similique ducimus aliquid voluptate perferendis, distinctio! 
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis ea, voluptas! Aliquam facere quas cumque rerum dolore impedit, dicta ducimus repellat dignissimos, fugiat, minima quaerat necessitatibus? Optio adipisci ab, obcaecati, porro unde accusantium facilis repudiandae.",
            'category_id' => 4,
            'featured' => false,
        ]);
        Product::create([
            'name' => 'electronics model 15',
            'slug' => 'electronics-model-15',
            'details' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis animi, veritatis quae repudiandae quod nulla porro quidem, itaque quis quaerat!',
            'price' => '160',
            'rating'=> '4',
            'weight' => '50',
            'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, culpa!
                                Lorem ipsum dolor sit amet.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor qui eius esse!
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam, modi!
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum, iusto earum voluptates autem esse molestiae ipsam, atque quam amet similique ducimus aliquid voluptate perferendis, distinctio! 
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis ea, voluptas! Aliquam facere quas cumque rerum dolore impedit, dicta ducimus repellat dignissimos, fugiat, minima quaerat necessitatibus? Optio adipisci ab, obcaecati, porro unde accusantium facilis repudiandae.",
            'category_id' => 4,
            'featured' => true,
        ]);
        
    }
}

// $product = Product::find(1);
// $product->tags()->attach(1);
// $product = Product::find(1);
// $product->tags()->attach(2);
// $product = Product::find(2);
// $product->tags()->attach(2);
// $product = Product::find(3);
// $product->tags()->attach(2);
// $product = Product::find(4);
// $product->tags()->attach(1);
// $product = Product::find(7);
// $product->tags()->attach(4);
// $product = Product::find(7);
// $product->tags()->attach(3);
// $product = Product::find(18);
// $product->tags()->attach(3);
// $product = Product::find(20);
// $product->tags()->attach(1);
// $product = Product::find(24);
// $product->tags()->attach(1);
// $product = Product::find(22);
// $product->tags()->attach(3);
// $product = Product::find(30);
// $product->tags()->attach(4);
// $product = Product::find(30);
// $product->tags()->attach(1);