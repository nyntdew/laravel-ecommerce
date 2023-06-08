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
        //
        $products = [
            [
                'product_name' => 'เสื้อเชิ้ต Regular Fit',
                'product_description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, ducimus.',
                'price'=>1813,
                'product_img'=>'storage/1.jpeg'

            ],
            [
                'product_name' => 'เสื้อเชิ้ต Regular Cotton',
                'product_description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, ducimus.',
                'price'=>2590,
                'product_img'=>'storage/1.jpeg'                

            ],
            [
                'product_name' => 'เสื้อเชิ้ตผู้ชาย ',
                'product_description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, ducimus.',
                'price'=>6216,
                'product_img'=>'storage/1.jpeg'                

            ],
            [
                'product_name' => 'เสื้อเชิ้ตผู้ชาย ทรงสมาร์ทฟิต',
                'product_description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, ducimus.',
                'price'=>777,
                'product_img'=>'storage/1.jpeg'                
            ],
        ];

        foreach($products as $key => $value){
            Product::create($value);
        }
    } 
}
