<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class category extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            ['id'=> 1, 'category_name'=>'Máy ảnh', 'category_thumbnail'=>'nikon-camera-green-background.jpg'],
            ['id'=> 2, 'category_name'=>'Ống kính', 'category_thumbnail'=>'kit-lens-landscape-799924072dd4b54a90c774d5aa2c21e5-zybravgx2q47.jpg'],
        ]);
    }
}
