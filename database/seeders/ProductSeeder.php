<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name'=>'Walton AC',
                "price"=>"895.89",
                "description"=>"A AC with much more feature",
                "category"=>"AC",
                "gallery"=>"https://bizdatainsight.com/wp-content/uploads/2020/03/Walton-AC.jpg"
            ],
            [
                'name'=>'Fujifilm X-T10',
                "price"=>"899.95",
                "description"=>"A Camera with much more feature",
                "category"=>"Camera",
                "gallery"=>"https://upload.wikimedia.org/wikipedia/commons/0/0f/Fujifilm_X_T10_%28149170327%29.jpeg"
            ],
            [
                'name'=>'SmartWatch',
                "price"=>"327.99",
                "description"=>"A smartwatch with more feature",
                "category"=>"Watch",
                "gallery"=>"https://i0.wp.com/latestoffersdeals.in/wp-content/uploads/2020/10/61JCGjRVDmL._SL1500_.jpg"
            ],
            [
                'name'=>'Headphone',
                "price"=>"119.99",
                "description"=>"A headphone with more feature",
                "category"=>"Headphone",
                "gallery"=>"https://i5.walmartimages.com/asr/e0c55a30-9d53-47ac-b1f0-b44f4edccde5_1.85fee18187fd7497280e83ef850cbc56.jpeg"
            ],
            [
                'name'=>'Xiaomi Redmi Note 10 Pro Max',
                "price"=>"270",
                "description"=>"A smartphone 6GB with more feature",
                "category"=>"mobile",
                "gallery"=>"https://st1.bgr.in/wp-content/uploads/2021/03/Redmi-Note-10-Pro-Max-8.jpg"
            ]
        ]);
    }
}
