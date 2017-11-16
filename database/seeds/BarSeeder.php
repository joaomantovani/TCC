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
            'price' => 1/*mt_rand (1*10, 10*10) / 10*/,
            'slug' => 'cerveja',
            'type' => 'drink',
            'image' => 'illustrations\products\beer.png',
        ]);
        DB::table('product_store')->insert(['product_id' => $product_id, 'store_id' => 2]);

        //Vinho
        $product_id = DB::table('products')->insertGetId([
            'name' => 'Vinho',
            'description' => 'Bebida feita a partir de uvas',
            'price' => 30/*mt_rand (1*10, 10*10) / 10*/,
            'slug' => 'vinho',
            'type' => 'drink',
            'image' => 'illustrations\products\wine.png',
        ]);
        DB::table('product_store')->insert(['product_id' => $product_id, 'store_id' => 2]);
        DB::table('effects')->insert([
            ['product_id' => $product_id, 'name' => 'Stamina', 'slug' => 'buff_stamina', 'type' => 'stamina', 'number' => 3],
            ['product_id' => $product_id, 'name' => 'Tensão', 'slug' => 'buff_tensao', 'type' => 'tensao', 'number' => mt_rand(0,1) == 0 ? -3 : 3],
            ['product_id' => $product_id, 'name' => 'Alcool', 'slug' => 'debuff_alcool', 'type' => 'embriaguez', 'number' => mt_rand(0,1) == 0 ? -2 : 2],
            ['product_id' => $product_id, 'name' => 'Açucar', 'slug' => 'debuff_açucar', 'type' => 'glicose', 'number' => mt_rand(0,1) == 0 ? -2 : 2],
        ]);

        //Café
        $product_id = DB::table('products')->insertGetId([
            'name' => 'Café',
            'description' => 'Bebida divina, elixir dos deuses, a nova água',
            'price' => 8/*mt_rand (1*10, 10*10) / 10*/,
            'slug' => 'coffee',
            'type' => 'drink',
            'image' => 'illustrations\products\coffee.png',
        ]);
        DB::table('product_store')->insert(['product_id' => $product_id, 'store_id' => 2]);
        DB::table('effects')->insert([
            ['product_id' => $product_id, 'name' => 'Stamina', 'slug' => 'buff_stamina', 'type' => 'stamina', 'number' => 8],
            ['product_id' => $product_id, 'name' => 'Tensão', 'slug' => 'buff_tensao', 'type' => 'tensao', 'number' => mt_rand(0,1) == 0 ? -8 : 8],
            ['product_id' => $product_id, 'name' => 'Alcool', 'slug' => 'debuff_alcool', 'type' => 'embriaguez', 'number' => mt_rand(0,1) == 0 ? -2 : 2],
            ['product_id' => $product_id, 'name' => 'Açucar', 'slug' => 'debuff_açucar', 'type' => 'glicose', 'number' => mt_rand(0,1) == 0 ? -2 : 2],
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
            ['product_id' => $product_id, 'name' => 'Stamina', 'slug' => 'buff_stamina', 'type' => 'stamina', 'number' => 1],
            ['product_id' => $product_id, 'name' => 'Tensão', 'slug' => 'buff_tensao', 'type' => 'tensao', 'number' => mt_rand(0,1) == 0 ? -1 : 1],
            ['product_id' => $product_id, 'name' => 'Alcool', 'slug' => 'debuff_alcool', 'type' => 'embriaguez', 'number' => mt_rand(0,1) == 0 ? -2 : 2],
            ['product_id' => $product_id, 'name' => 'Açucar', 'slug' => 'debuff_açucar', 'type' => 'glicose', 'number' => mt_rand(0,1) == 0 ? -2 : 2],
        ]);

        //Presunto
        $product_id = DB::table('products')->insertGetId([
            'name' => 'Presunto',
            'description' => 'Bom para comer com sanduíche',
            'price' => 12/*mt_rand (1*10, 10*10) / 10*/,
            'slug' => 'presunto',
            'type' => 'food',
            'image' => 'illustrations\products\ham.png',
        ]);
        DB::table('product_store')->insert(['product_id' => $product_id, 'store_id' => 2]);
        DB::table('effects')->insert([
            ['product_id' => $product_id, 'name' => 'Stamina', 'slug' => 'buff_stamina', 'type' => 'stamina', 'number' => 1],
            ['product_id' => $product_id, 'name' => 'Tensão', 'slug' => 'buff_tensao', 'type' => 'tensao', 'number' => mt_rand(0,1) == 0 ? -1 : 1],
            ['product_id' => $product_id, 'name' => 'Alcool', 'slug' => 'debuff_alcool', 'type' => 'embriaguez', 'number' => mt_rand(0,1) == 0 ? -2 : 2],
            ['product_id' => $product_id, 'name' => 'Açucar', 'slug' => 'debuff_açucar', 'type' => 'glicose', 'number' => mt_rand(0,1) == 0 ? -2 : 2],
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
            ['product_id' => $product_id, 'name' => 'Stamina', 'slug' => 'buff_stamina', 'type' => 'stamina', 'number' => 1],
            ['product_id' => $product_id, 'name' => 'Tensão', 'slug' => 'buff_tensao', 'type' => 'tensao', 'number' => mt_rand(0,1) == 0 ? -1 : 1],
            ['product_id' => $product_id, 'name' => 'Alcool', 'slug' => 'debuff_alcool', 'type' => 'embriaguez', 'number' => mt_rand(0,1) == 0 ? -2 : 2],
            ['product_id' => $product_id, 'name' => 'Açucar', 'slug' => 'debuff_açucar', 'type' => 'glicose', 'number' => mt_rand(0,1) == 0 ? -2 : 2],
        ]);

        //Cheese
        $product_id = DB::table('products')->insertGetId([
            'name' => 'Queijo',
            'description' => 'Com uns buracos',
            'price' => 6/*mt_rand (1*10, 10*10) / 10*/,
            'slug' => 'queijo',
            'type' => 'food',
            'image' => 'illustrations\products\cheese.png',
        ]);
        DB::table('product_store')->insert(['product_id' => $product_id, 'store_id' => 2]);
        DB::table('effects')->insert([
            ['product_id' => $product_id, 'name' => 'Stamina', 'slug' => 'buff_stamina', 'type' => 'stamina', 'number' => 6],
            ['product_id' => $product_id, 'name' => 'Tensão', 'slug' => 'buff_tensao', 'type' => 'tensao', 'number' => mt_rand(0,1) == 0 ? -6 : 6],
            ['product_id' => $product_id, 'name' => 'Alcool', 'slug' => 'debuff_alcool', 'type' => 'embriaguez', 'number' => mt_rand(0,1) == 0 ? -2 : 2],
            ['product_id' => $product_id, 'name' => 'Açucar', 'slug' => 'debuff_açucar', 'type' => 'glicose', 'number' => mt_rand(0,1) == 0 ? -2 : 2],
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
            ['product_id' => $product_id, 'name' => 'Stamina', 'slug' => 'buff_stamina', 'type' => 'stamina', 'number' => 1],
            ['product_id' => $product_id, 'name' => 'Tensão', 'slug' => 'buff_tensao', 'type' => 'tensao', 'number' => mt_rand(0,1) == 0 ? -1 : 1],
            ['product_id' => $product_id, 'name' => 'Alcool', 'slug' => 'debuff_alcool', 'type' => 'embriaguez', 'number' => mt_rand(0,1) == 0 ? -2 : 2],
            ['product_id' => $product_id, 'name' => 'Açucar', 'slug' => 'debuff_açucar', 'type' => 'glicose', 'number' => mt_rand(0,1) == 0 ? -2 : 2],
        ]);

        //Salsicha
        $product_id = DB::table('products')->insertGetId([
            'name' => 'Salsicha',
            'description' => 'Contém restos de tudo',
            'price' => 23/*mt_rand (1*10, 10*10) / 10*/,
            'slug' => 'salsicha',
            'type' => 'food',
            'image' => 'illustrations\products\sausage.png',
        ]);
        DB::table('product_store')->insert(['product_id' => $product_id, 'store_id' => 2]);
        DB::table('effects')->insert([
            ['product_id' => $product_id, 'name' => 'Stamina', 'slug' => 'buff_stamina', 'type' => 'stamina', 'number' => 2],
            ['product_id' => $product_id, 'name' => 'Tensão', 'slug' => 'buff_tensao', 'type' => 'tensao', 'number' => mt_rand(0,1) == 0 ? -2 : 2],
            ['product_id' => $product_id, 'name' => 'Alcool', 'slug' => 'debuff_alcool', 'type' => 'embriaguez', 'number' => mt_rand(0,1) == 0 ? -2 : 2],
            ['product_id' => $product_id, 'name' => 'Açucar', 'slug' => 'debuff_açucar', 'type' => 'glicose', 'number' => mt_rand(0,1) == 0 ? -2 : 2],
        ]);

        //Refrigerante
        $product_id = DB::table('products')->insertGetId([
            'name' => 'Refrigerante',
            'description' => 'Mesma coisa que a garrafa, mas em lata',
            'price' => 24/*mt_rand (1*10, 10*10) / 10*/,
            'slug' => 'refrigerante',
            'type' => 'drink',
            'image' => 'illustrations\products\soda.png',
        ]);
        DB::table('product_store')->insert(['product_id' => $product_id, 'store_id' => 2]);
        DB::table('effects')->insert([
            ['product_id' => $product_id, 'name' => 'Stamina', 'slug' => 'buff_stamina', 'type' => 'stamina', 'number' => 2],
            ['product_id' => $product_id, 'name' => 'Tensão', 'slug' => 'buff_tensao', 'type' => 'tensao', 'number' => mt_rand(0,1) == 0 ? -2 : 2],
            ['product_id' => $product_id, 'name' => 'Alcool', 'slug' => 'debuff_alcool', 'type' => 'embriaguez', 'number' => mt_rand(0,1) == 0 ? -2 : 2],
            ['product_id' => $product_id, 'name' => 'Açucar', 'slug' => 'debuff_açucar', 'type' => 'glicose', 'number' => mt_rand(0,1) == 0 ? -2 : 2],
        ]);

        //Bife
        $product_id = DB::table('products')->insertGetId([
            'name' => 'Bife',
            'description' => 'Extraído do boi',
            'price' => 26/*mt_rand (1*10, 10*10) / 10*/,
            'slug' => 'bife',
            'type' => 'food',
            'image' => 'illustrations\products\steak.png',
        ]);
        DB::table('product_store')->insert(['product_id' => $product_id, 'store_id' => 2]);
        DB::table('effects')->insert([
            ['product_id' => $product_id, 'name' => 'Stamina', 'slug' => 'buff_stamina', 'type' => 'stamina', 'number' => 2],
            ['product_id' => $product_id, 'name' => 'Tensão', 'slug' => 'buff_tensao', 'type' => 'tensao', 'number' => mt_rand(0,1) == 0 ? -2 : 2],
            ['product_id' => $product_id, 'name' => 'Alcool', 'slug' => 'debuff_alcool', 'type' => 'embriaguez', 'number' => mt_rand(0,1) == 0 ? -2 : 2],
            ['product_id' => $product_id, 'name' => 'Açucar', 'slug' => 'debuff_açucar', 'type' => 'glicose', 'number' => mt_rand(0,1) == 0 ? -2 : 2],
        ]);
        
    }
}
