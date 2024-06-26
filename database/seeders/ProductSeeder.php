<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $product = new \App\Models\product([
            'name'=>'Product #1',
            'detail'=>'product #1 details'
        ]);

        $product->save();
        $product = new \App\Models\product([
            'name'=>'Product #2',
            'detail'=>'product #2details'
        ]);
        $product->save();
        $product = new \App\Models\product([
            'name'=>'Product #3',
            'detail'=>'product #3 details'
        ]);
        $product->save();
        



    }
}
