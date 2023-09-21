<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //*autre
        Product::create([
            'name'=>"Wood & Cloth sofa 1 ",
            'desc' => "Incididunt ut labore et dolore magna aliqua quis ipsum suspendisse ultrices gravida. Risus commodo viverra",
            'img' => "offer_img.png",
            'qnt' => 11,
            'price' => 250,
            'categorie_id' =>4,
            'user_id' => 1 ,
        ]);
        Product::create([
            'name'=>"Wood & Cloth sofa 1",
            'desc' => "Incididunt ut labore et dolore magna aliqua quis ipsum suspendisse ultrices gravida. Risus commodo viverra",
            'img' => "banner_img.png",
            'qnt' => 13,
            'price' => 250,
            'categorie_id' =>4,
            'user_id' => 1 ,
        ]);
        Product::create([
            'name'=>"Wood & Cloth sofa 2 ",
            'desc' => "Incididunt ut labore et dolore magna aliqua quis ipsum suspendisse ultrices gravida. Risus commodo viverra",
            'img' => "feature_4.png",
            'qnt' => 10,
            'price' => 250,
            'categorie_id' =>4,
            'user_id' => 1 ,
        ]);
    
    
        Product::create([
            'name'=>"Wood & Cloth sofa 3 ",
            'desc' => "Incididunt ut labore et dolore magna aliqua quis ipsum suspendisse ultrices gravida. Risus commodo viverra",
            'img' => "feature_1.png",
            'qnt' => 14,
            'price' => 250,
            'categorie_id' =>4,
            'user_id' => 1 ,
        ]);
        Product::create([
            'name'=>"Wood & Cloth sofa 5 ",
            'desc' => "Incididunt ut labore et dolore magna aliqua quis ipsum suspendisse ultrices gravida. Risus commodo viverra",
            'img' => "feature_3.png",
            'qnt' => 1,
            'price' => 250,
            'categorie_id' =>4,
            'user_id' => 1 ,
        ]);
        Product::create([
            'name'=>"Wood & Cloth sofa 6 ",
            'desc' => "Incididunt ut labore et dolore magna aliqua quis ipsum suspendisse ultrices gravida. Risus commodo viverra",
            'img' => "feature_2.png",
            'qnt' => 100,
            'price' => 250,
            'categorie_id' =>4,
            'user_id' => 1 ,
        ]);
        //**chair */
        Product::create([
            'name'=>"Quartz Belt 1 watch",
            'desc' => "lorem product 1",
            'img' => "product_1.png",
            'qnt' => 170,
            'price' => 250,
            'categorie_id' => 1,
            'user_id' => 1 ,
        ]);
        Product::create([
            'name'=>"Quartz Belt 2 watch",
            'desc' => "lorem product 2",
            'img' => "product_2.png",
            'qnt' => 250,
            'price' => 250,
            'categorie_id' => 1,
            'user_id' => 1 ,
        ]);
        Product::create([
            'name'=>"Quartz Belt 3 watch",
            'desc' => "lorem product 3",
            'img' => "product_3.png",
            'qnt' => 250,
            'price' => 250,
            'categorie_id' => 1,
            'user_id' => 1 ,
        ]);
        Product::create([
            'name'=>"Quartz Belt 4 watch",
            'desc' => "lorem product 4",
            'img' => "product_4.png",
            'qnt' => 20,
            'price' => 250,
            'categorie_id' => 1,
            'user_id' => 1 ,
        ]);
        Product::create([
            'name'=>"Quartz Belt 5 watch",
            'desc' => "lorem product 5",
            'img' => "product_5.png",
            'qnt' => 260,
            'price' => 250,
            'categorie_id' => 1,
            'user_id' => 1 ,
        ]);
        Product::create([
            'name'=>"Quartz Belt 6 watch",
            'desc' => "lorem product 6",
            'img' => "product_6.png",
            'qnt' => 280,
            'price' => 250,
            'categorie_id' => 1,
            'user_id' => 1 ,
        ]);
        Product::create([
            'name'=>"Quartz Belt 7 watch",
            'desc' => "lorem product 7",
            'img' => "product_7.png",
            'qnt' => 290,
            'price' => 250,
            'categorie_id' => 1,
            'user_id' => 1 ,
        ]);
        Product::create([
            'name'=>"Quartz Belt 8 watch",
            'desc' => "lorem product 8",
            'img' => "product_8.png",
            'qnt' => 50,
            'price' => 250,
            'categorie_id' => 1,
            'user_id' => 1 ,
        ]);
        // *** tables
        Product::create([
            'name'=>"Table Belt 1 watch",
            'desc' => "lorem product 1",
            'img' => "table1.jpg",
            'qnt' => 25,
            'price' => 250,
            'categorie_id' => 2,
            'user_id' => 1 ,
        ]);
        Product::create([
            'name'=>"Table Belt 2 watch",
            'desc' => "lorem product 2",
            'img' => "table2.jpg",
            'qnt' => 210,
            'price' => 250,
            'categorie_id' => 2,
            'user_id' => 1 ,
        ]);
        Product::create([
            'name'=>"Table Belt 3 watch",
            'desc' => "lorem product 3",
            'img' => "table3.jpg",
            'qnt' => 250,
            'price' => 250,
            'categorie_id' => 2,
            'user_id' => 1 ,
        ]);
        Product::create([
            'name'=>"Table Belt 4 watch",
            'desc' => "lorem product 4",
            'img' => "table4.jpg",
            'qnt' => 250,
            'price' => 250,
            'categorie_id' => 2,
            'user_id' => 1 ,
        ]);
        // ** sofa
        Product::create([
            'name'=>"sofa Belt 1 watch",
            'desc' => "lorem product 1",
            'img' => "sofa1.jpg",
            'qnt' => 250,
            'price' => 250,
            'categorie_id' => 3,
            'user_id' => 1 ,
        ]);
        Product::create([
            'name'=>"sofa Belt 2 watch",
            'desc' => "lorem product 2",
            'img' => "sofa2.jpg",
            'qnt' => 250,
            'price' => 250,
            'categorie_id' => 3,
            'user_id' => 1 ,
        ]);
        Product::create([
            'name'=>"sofa Belt 3 watch",
            'desc' => "lorem product 3",
            'img' => "sofa3.jpg",
            'qnt' => 250,
            'price' => 250,
            'categorie_id' => 3,
            'user_id' => 1 ,
        ]);
        Product::create([
            'name'=>"sofa Belt 4 watch",
            'desc' => "lorem product 4",
            'img' => "sofa4.jpg",
            'qnt' => 250,
            'price' => 250,
            'categorie_id' => 3,
            'user_id' => 1 ,
        ]);
    }
}
