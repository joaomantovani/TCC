<?php

use Illuminate\Database\Seeder;

use Carbon\Carbon;

class EscolaSeeder extends Seeder
{
    public function run()
    {
        $product_id = DB::table('products')->insertGetId([
            'name' => 'Curso de lógica',
            'description' => 'Estude lógica de programação para melhorar sua inteligência',
            'price' => 2500/*mt_rand (1*10, 10*10) / 10*/,
            'slug' => 'curso-de-logica',
            'type' => 'course',
            'image' => 'illustrations\products\wine.png',
        ]);
        DB::table('product_store')->insert(['product_id' => $product_id, 'store_id' => 4]);

        $product_id = DB::table('products')->insertGetId([
            'name' => 'Curso de carisma',
            'description' => 'Consiga uns pontos a mais nessa sua habilidade de conversar',
            'price' => 2500/*mt_rand (1*10, 10*10) / 10*/,
            'slug' => 'curso-de-logica',
            'type' => 'course',
            'image' => 'illustrations\products\wine.png',
        ]);
        DB::table('product_store')->insert(['product_id' => $product_id, 'store_id' => 4]);
    }
}
