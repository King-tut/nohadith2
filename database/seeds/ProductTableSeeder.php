<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\Product([
         'imagepath' => 'src/images/b-like.jpg',
         'title' => 'B more like',
         'description' => 'This is very close to b-like',
         'price' => 20

        	]);
        $product->save();

         $product = new \App\Product([
         'imagepath' => 'src/images/bobby.jpg',
         'title' => 'Mirror Mirror',
         'description' => 'Shes hiding her face but her body is saying alot',
         'price' => 25

            ]);
        $product->save();
    }
}
