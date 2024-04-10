<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class product extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('products')->insert(
            [
                [
                    'id'=> 1,
                    'product_name'=>'Nikon D3100',
                    'product_price'=> 3100000,
                    'product_image'=> 'nikon-d3100-2.png',
                    'category_id'=> 1
                ],
                [
                    'id'=> 2,
                    'product_name'=>'Nikon AF-S DX Nikkor 35mm F1.8G',
                    'product_price'=> 4500000,
                    'product_image'=>'afs-dx-nikkor-35mm-f18g-600x600.webp',
                    'category_id'=> 2
                ],
                [
                    'id'=> 3,
                    'product_name'=>'Nikon AF-S Nikkor 24-120mm F4G ED VR',
                    'product_price'=> 14500000,
                    'product_image'=>'afs-nikkor-24120mm-f4g-ed-vr-hang-nhap-khau1-1-600x600.webp',
                    'category_id'=> 2],
                [
                    'id'=> 4,
                    'product_name'=>'Canon EOS R50 Kit RF-S18-45mm F4.5-6.3',
                    'product_price'=> 17000000,
                    'product_image'=>'may-anh-canon-eos-r50-kit-rfs18-45mm-f45-63-is-stm-600x600.webp',
                    'category_id'=> 1],
                [
                    'id'=> 5,
                    'product_name'=>'Fujifilm X-S20 Body',
                    'product_price'=> 31000000,
                    'product_image'=>'may-anh-fujifilm-x-s20-600x600.webp',
                    'category_id'=> 1
                ],
                [
                    'id'=> 6,
                    'product_name'=>'Sony Alpha A7R IIIA',
                    'product_price'=> 43990000,
                    'product_image'=>'may-anh-sony-alpha-a7rm3a1-1-600x600.webp',
                    'category_id'=> 1
                ],
            ]
        );
    }
}
