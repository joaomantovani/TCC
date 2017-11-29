<?php

use Illuminate\Database\Seeder;

use Carbon\Carbon;

class BarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Cerveja
        $product_id = DB::table('products')->insertGetId([
            'name' => 'Cerveja',
            'description' => 'Uma bebida fermentada extremamente refrescante',
            'price' => 9,
            'slug' => 'cerveja',
            'type' => 'drink',
            'image' => 'illustrations\products\beer.png',
        ]);
        DB::table('product_store')->insert(['product_id' => $product_id, 'store_id' => 2]);
        DB::table('effects')->insert([
            ['product_id' => $product_id, 'name' => 'Tensão', 'slug' => 'diminui_tensao', 'type' => 'tensao', 'number' => -10],
            ['product_id' => $product_id, 'name' => 'Alcool', 'slug' => 'aumenta_alcool', 'type' => 'embriaguez', 'number' => 15],
        ]);

        //Vinho
        $product_id = DB::table('products')->insertGetId([
            'name' => 'Vinho',
            'description' => 'Bebida feita a partir de uvas',
            'price' => 90/*mt_rand (1*10, 10*10) / 10*/,
            'slug' => 'vinho',
            'type' => 'drink',
            'image' => 'illustrations\products\wine.png',
        ]);
        DB::table('product_store')->insert(['product_id' => $product_id, 'store_id' => 2]);
        DB::table('effects')->insert([
            ['product_id' => $product_id, 'name' => 'Tensão', 'slug' => 'diminui_tensao', 'type' => 'tensao', 'number' => -35],
            ['product_id' => $product_id, 'name' => 'Alcool', 'slug' => 'aumenta_alcool', 'type' => 'embriaguez', 'number' => 15],
        ]);

        //Café
        $product_id = DB::table('products')->insertGetId([
            'name' => 'Café',
            'description' => 'Um café expresso com muita cafeina para manter a pessoa acordada',
            'price' => 8/*mt_rand (1*10, 10*10) / 10*/,
            'slug' => 'coffee',
            'type' => 'drink',
            'image' => 'illustrations\products\coffee.png',
        ]);
        DB::table('product_store')->insert(['product_id' => $product_id, 'store_id' => 2]);
        DB::table('effects')->insert([
            ['product_id' => $product_id, 'name' => 'Stamina', 'slug' => 'aumenta_stamina', 'type' => 'stamina', 'number' => 30],
            ['product_id' => $product_id, 'name' => 'Tensão', 'slug' => 'diminui_tensao', 'type' => 'tensao', 'number' => -3],
            ['product_id' => $product_id, 'name' => 'Cafeina', 'slug' => 'aumenta_cafeina', 'type' => 'cafeina', 'number' => 25],
        ]);

        //Limonada
        $product_id = DB::table('products')->insertGetId([
            'name' => 'Batida de limão',
            'description' => 'Limão e muito alcool',
            'price' => 17/*mt_rand (1*10, 10*10) / 10*/,
            'slug' => 'limonada',
            'type' => 'drink',
            'image' => 'illustrations\products\limonade.png',
        ]);
        DB::table('product_store')->insert(['product_id' => $product_id, 'store_id' => 2]);
        DB::table('effects')->insert([
            ['product_id' => $product_id, 'name' => 'Stamina', 'slug' => 'aumenta_stamina', 'type' => 'stamina', 'number' => 8],
            ['product_id' => $product_id, 'name' => 'Tensão', 'slug' => 'diminui_tensao', 'type' => 'tensao', 'number' => -5],
            ['product_id' => $product_id, 'name' => 'Alcool', 'slug' => 'aumenta_alcool', 'type' => 'embriaguez', 'number' => 12],
        ]);

        //Presunto
        $product_id = DB::table('products')->insertGetId([
            'name' => 'Presunto',
            'description' => 'Bom para comer com sanduíche',
            'price' => 8/*mt_rand (1*10, 10*10) / 10*/,
            'slug' => 'presunto',
            'type' => 'food',
            'image' => 'illustrations\products\ham.png',
        ]);
        DB::table('product_store')->insert(['product_id' => $product_id, 'store_id' => 2]);
        DB::table('effects')->insert([
            ['product_id' => $product_id, 'name' => 'Stamina', 'slug' => 'aumenta_stamina', 'type' => 'stamina', 'number' => 13],
            ['product_id' => $product_id, 'name' => 'Colesterol', 'slug' => 'aumenta_colesterol', 'type' => 'colesterol', 'number' => 20],
        ]);

        //Hamburguer
        $product_id = DB::table('products')->insertGetId([
            'name' => 'Hamburguer',
            'description' => '240G de pura costela',
            'price' => 13/*mt_rand (1*10, 10*10) / 10*/,
            'slug' => 'hamburguer',
            'type' => 'food',
            'image' => 'illustrations\products\hamburguer.png',
        ]);
        DB::table('product_store')->insert(['product_id' => $product_id, 'store_id' => 2]);
        DB::table('effects')->insert([
            ['product_id' => $product_id, 'name' => 'Stamina', 'slug' => 'aumenta_stamina', 'type' => 'stamina', 'number' => 10],
            ['product_id' => $product_id, 'name' => 'Tensão', 'slug' => 'diminui_tensao', 'type' => 'tensao', 'number' => -19],
            ['product_id' => $product_id, 'name' => 'Colesterol', 'slug' => 'aumenta_colesterol', 'type' => 'colesterol', 'number' => 25],
        ]);

        //Cheese
        $product_id = DB::table('products')->insertGetId([
            'name' => 'Queijo',
            'description' => 'Com uns buracos',
            'price' => 2/*mt_rand (1*10, 10*10) / 10*/,
            'slug' => 'queijo',
            'type' => 'food',
            'image' => 'illustrations\products\cheese.png',
        ]);
        DB::table('product_store')->insert(['product_id' => $product_id, 'store_id' => 2]);
        DB::table('effects')->insert([
            ['product_id' => $product_id, 'name' => 'Stamina', 'slug' => 'aumenta_stamina', 'type' => 'stamina', 'number' => 3],
            ['product_id' => $product_id, 'name' => 'Colesterol', 'slug' => 'aumenta_colesterol', 'type' => 'colesterol', 'number' => 1],
        ]);

        //Ovo
        $product_id = DB::table('products')->insertGetId([
            'name' => 'Ovo frito',
            'description' => 'Quase um omeletão',
            'price' => 10/*mt_rand (1*10, 10*10) / 10*/,
            'slug' => 'fried_egg',
            'type' => 'food',
            'image' => 'illustrations\products\egg.png',
        ]);
        DB::table('product_store')->insert(['product_id' => $product_id, 'store_id' => 2]);
        DB::table('effects')->insert([
            ['product_id' => $product_id, 'name' => 'Stamina', 'slug' => 'aumenta_stamina', 'type' => 'stamina', 'number' => 7],
            ['product_id' => $product_id, 'name' => 'Tensão', 'slug' => 'diminui_tensao', 'type' => 'tensao', 'number' => -9],
            ['product_id' => $product_id, 'name' => 'Colesterol', 'slug' => 'aumenta_colesterol', 'type' => 'colesterol', 'number' => 10],
        ]);

        //Salsicha
        $product_id = DB::table('products')->insertGetId([
            'name' => 'Salsicha',
            'description' => 'Contém restos de tudo',
            'price' => 1/*mt_rand (1*10, 10*10) / 10*/,
            'slug' => 'salsicha',
            'type' => 'food',
            'image' => 'illustrations\products\sausage.png',
        ]);
        DB::table('product_store')->insert(['product_id' => $product_id, 'store_id' => 2]);
        DB::table('effects')->insert([
            ['product_id' => $product_id, 'name' => 'Stamina', 'slug' => 'aumenta_stamina', 'type' => 'stamina', 'number' => 5],
            ['product_id' => $product_id, 'name' => 'Tensão', 'slug' => 'diminui_tensao', 'type' => 'tensao', 'number' => -1],
            ['product_id' => $product_id, 'name' => 'Colesterol', 'slug' => 'aumenta_colesterol', 'type' => 'colesterol', 'number' => 35],
        ]);

        //Refrigerante
        $product_id = DB::table('products')->insertGetId([
            'name' => 'Refrigerante',
            'description' => 'Mesma coisa que a garrafa, mas em lata',
            'price' => 3/*mt_rand (1*10, 10*10) / 10*/,
            'slug' => 'refrigerante',
            'type' => 'drink',
            'image' => 'illustrations\products\soda.png',
        ]);
        DB::table('product_store')->insert(['product_id' => $product_id, 'store_id' => 2]);
        DB::table('effects')->insert([
            ['product_id' => $product_id, 'name' => 'Stamina', 'slug' => 'aumenta_stamina', 'type' => 'stamina', 'number' => 8],
            ['product_id' => $product_id, 'name' => 'Tensão', 'slug' => 'diminui_tensao', 'type' => 'tensao', 'number' => -3],
            ['product_id' => $product_id, 'name' => 'Açucar', 'slug' => 'debuff_açucar', 'type' => 'glicose', 'number' => 30],
        ]);

        //Bife
        $product_id = DB::table('products')->insertGetId([
            'name' => 'Bife',
            'description' => 'Extraído do boi',
            'price' => 76/*mt_rand (1*10, 10*10) / 10*/,
            'slug' => 'bife',
            'type' => 'food',
            'image' => 'illustrations\products\steak.png',
        ]);
        DB::table('product_store')->insert(['product_id' => $product_id, 'store_id' => 2]);
        DB::table('effects')->insert([
            ['product_id' => $product_id, 'name' => 'Stamina', 'slug' => 'aumenta_stamina', 'type' => 'stamina', 'number' => 15],
            ['product_id' => $product_id, 'name' => 'Tensão', 'slug' => 'diminui_tensao', 'type' => 'tensao', 'number' => -5],
            ['product_id' => $product_id, 'name' => 'Colesterol', 'slug' => 'aumenta_colesterol', 'type' => 'colesterol', 'number' => 5],
        ]);
        
    }
}
