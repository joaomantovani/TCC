<?php

use Illuminate\Database\Seeder;

use Carbon\Carbon;

class EquipamentSeeder extends Seeder
{
    public function run()
    {
        $product_id = DB::table('products')->insertGetId([
            'name' => 'Teclado velho',
            'description' => 'Lorem ipsum',
            'price' => 31/*mt_rand (1*10, 10*10) / 10*/,
            'slug' => 'teclado_velho',
            'type' => 'equipament',
            'image' => 'illustrations\products\wine.png',
        ]);
        DB::table('product_store')->insert(['product_id' => $product_id, 'store_id' => 3]);
        
        $product_id = DB::table('products')->insertGetId([
            'name' => 'Monitor 15 polegadas tubo',
            'description' => 'Lorem ipsum',
            'price' => 32/*mt_rand (1*10, 10*10) / 10*/,
            'slug' => 'monitor_15_polegadas_tubo',
            'type' => 'equipament',
            'image' => 'illustrations\products\wine.png',
        ]);
        DB::table('product_store')->insert(['product_id' => $product_id, 'store_id' => 3]);
        DB::table('effects')->insert([
            ['product_id' => $product_id, 'name' => 'Stamina', 'slug' => 'buff_stamina', 'type' => 'stamina', 'number' => 2],
            ['product_id' => $product_id, 'name' => 'Tensão', 'slug' => 'buff_tensao', 'type' => 'tensao', 'number' => mt_rand(0,1) == 0 ? -2 : 2],
            ['product_id' => $product_id, 'name' => 'Alcool', 'slug' => 'debuff_alcool', 'type' => 'embriaguez', 'number' => mt_rand(0,1) == 0 ? -2 : 2],
            ['product_id' => $product_id, 'name' => 'Energia', 'slug' => 'buff_energia', 'type' => 'energia', 'number' => mt_rand(0,1) == 0 ? -2 : 2],
            ['product_id' => $product_id, 'name' => 'Açucar', 'slug' => 'debuff_açucar', 'type' => 'glicose', 'number' => mt_rand(0,1) == 0 ? -2 : 2],
        ]);

        $product_id = DB::table('products')->insertGetId([
            'name' => 'Monitor 17 polegadas lcd',
            'description' => 'Lorem ipsum',
            'price' => 33/*mt_rand (1*10, 10*10) / 10*/,
            'slug' => 'monitor_17_polegadas',
            'type' => 'equipament',
            'image' => 'illustrations\products\wine.png',
        ]);
        DB::table('product_store')->insert(['product_id' => $product_id, 'store_id' => 3]);

        $product_id = DB::table('products')->insertGetId([
            'name' => 'Monitor 19 polegadas led',
            'description' => 'Lorem ipsum',
            'price' => 34/*mt_rand (1*10, 10*10) / 10*/,
            'slug' => 'monitor-19-polegadas-led',
            'type' => 'equipament',
            'image' => 'illustrations\products\wine.png',
        ]);
        DB::table('product_store')->insert(['product_id' => $product_id, 'store_id' => 3]);

        $product_id = DB::table('products')->insertGetId([
            'name' => 'Monitor 21 polegadas',
            'description' => 'Lorem ipsum',
            'price' => 35/*mt_rand (1*10, 10*10) / 10*/,
            'slug' => 'monitor-21-polegadas',
            'type' => 'equipament',
            'image' => 'illustrations\products\wine.png',
        ]);
        DB::table('product_store')->insert(['product_id' => $product_id, 'store_id' => 3]);

        $product_id = DB::table('products')->insertGetId([
            'name' => 'Monitor 25 Ultra Wide',
            'description' => 'Lorem ipsum',
            'price' => 36/*mt_rand (1*10, 10*10) / 10*/,
            'slug' => 'monitor-25-ultra-wide',
            'type' => 'equipament',
            'image' => 'illustrations\products\wine.png',
        ]);
        DB::table('product_store')->insert(['product_id' => $product_id, 'store_id' => 3]);

        $product_id = DB::table('products')->insertGetId([
            'name' => 'Monitor 21 polegadas duplo',
            'description' => 'Lorem ipsum',
            'price' => 37/*mt_rand (1*10, 10*10) / 10*/,
            'slug' => 'monitor-21-polegadas-duplo',
            'type' => 'equipament',
            'image' => 'illustrations\products\wine.png',
        ]);
        DB::table('product_store')->insert(['product_id' => $product_id, 'store_id' => 3]);

        $product_id = DB::table('products')->insertGetId([
            'name' => 'Monitor 29 Ultra Wide',
            'description' => 'Lorem ipsum',
            'price' => 38/*mt_rand (1*10, 10*10) / 10*/,
            'slug' => 'monitor-29-ultra-wide',
            'type' => 'equipament',
            'image' => 'illustrations\products\wine.png',
        ]);
        DB::table('product_store')->insert(['product_id' => $product_id, 'store_id' => 3]);

        $product_id = DB::table('products')->insertGetId([
            'name' => 'Monitor 29 duplo',
            'description' => 'Lorem ipsum',
            'price' => 39/*mt_rand (1*10, 10*10) / 10*/,
            'slug' => 'monitor-29-duplo',
            'type' => 'equipament',
            'image' => 'illustrations\products\wine.png',
        ]);
        DB::table('product_store')->insert(['product_id' => $product_id, 'store_id' => 3]);

        $product_id = DB::table('products')->insertGetId([
            'name' => 'Monitor 25 Ultra Wide Duplo',
            'description' => 'Lorem ipsum',
            'price' => 40/*mt_rand (1*10, 10*10) / 10*/,
            'slug' => 'monitor-25-ultra-wide-duplo',
            'type' => 'equipament',
            'image' => 'illustrations\products\wine.png',
        ]);
        DB::table('product_store')->insert(['product_id' => $product_id, 'store_id' => 3]);

        $product_id = DB::table('products')->insertGetId([
            'name' => 'Monitor 34 Ultra Wide Curvo',
            'description' => 'Lorem ipsum',
            'price' => 41/*mt_rand (1*10, 10*10) / 10*/,
            'slug' => 'monitor-34-ultra-wide-curvo',
            'type' => 'equipament',
            'image' => 'illustrations\products\wine.png',
        ]);
        DB::table('product_store')->insert(['product_id' => $product_id, 'store_id' => 3]);

        $product_id = DB::table('products')->insertGetId([
            'name' => 'Monitor 34 Ultra Wide Curvo duplo',
            'description' => 'Lorem ipsum',
            'price' => 42/*mt_rand (1*10, 10*10) / 10*/,
            'slug' => 'monitor-34-ultra-wide-curvo-duplo',
            'type' => 'equipament',
            'image' => 'illustrations\products\wine.png',
        ]);
        DB::table('product_store')->insert(['product_id' => $product_id, 'store_id' => 3]);

        $product_id = DB::table('products')->insertGetId([
            'name' => 'Monitor 34 Ultra Wide Curvo Triplo',
            'description' => 'Lorem ipsum',
            'price' => 43/*mt_rand (1*10, 10*10) / 10*/,
            'slug' => 'monitor-34-ultra-wide-curvo-triplo',
            'type' => 'equipament',
            'image' => 'illustrations\products\wine.png',
        ]);
        DB::table('product_store')->insert(['product_id' => $product_id, 'store_id' => 3]);
    }
}
