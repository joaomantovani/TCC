<?php

use Illuminate\Database\Seeder;

use Carbon\Carbon;

class ProductsSeeder extends Seeder
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
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('product_store')->insert(['product_id' => $product_id, 'store_id' => 1]);

        DB::table('effects')->insert([
            ['product_id' => $product_id, 'name' => 'Stamina', 'slug' => 'buff_stamina', 'type' => 'stamina', 'number' => 1],
            ['product_id' => $product_id, 'name' => 'Tensão', 'slug' => 'buff_tensao', 'type' => 'tensao', 'number' => mt_rand(0,1) == 0 ? -2 : 2],
            ['product_id' => $product_id, 'name' => 'Alcool', 'slug' => 'debuff_alcool', 'type' => 'embriaguez', 'number' => mt_rand(0,1) == 0 ? -2 : 2],
            ['product_id' => $product_id, 'name' => 'Energia', 'slug' => 'buff_energia', 'type' => 'energia', 'number' => mt_rand(0,1) == 0 ? -2 : 2],
            ['product_id' => $product_id, 'name' => 'Açucar', 'slug' => 'debuff_açucar', 'type' => 'glicose', 'number' => mt_rand(0,1) == 0 ? -2 : 2],
        ]);

        //Bottle
        $product_id = DB::table('products')->insertGetId([
            'name' => 'Refrigerante',
            'description' => 'Um tanto quanto açucarado',
            'price' => 2/*mt_rand (1*10, 10*10) / 10*/,
            'slug' => 'bottle',
            'type' => 'drink',
            'image' => 'illustrations\products\bottle.png',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('product_store')->insert(['product_id' => $product_id, 'store_id' => 1]);
        DB::table('effects')->insert([
            ['product_id' => $product_id, 'name' => 'Stamina', 'slug' => 'buff_stamina', 'type' => 'stamina', 'number' => 2],
            ['product_id' => $product_id, 'name' => 'Tensão', 'slug' => 'buff_tensao', 'type' => 'tensao', 'number' => mt_rand(0,1) == 0 ? -2 : 2],
            ['product_id' => $product_id, 'name' => 'Alcool', 'slug' => 'debuff_alcool', 'type' => 'embriaguez', 'number' => mt_rand(0,1) == 0 ? -2 : 2],
            ['product_id' => $product_id, 'name' => 'Energia', 'slug' => 'buff_energia', 'type' => 'energia', 'number' => mt_rand(0,1) == 0 ? -2 : 2],
            ['product_id' => $product_id, 'name' => 'Açucar', 'slug' => 'debuff_açucar', 'type' => 'glicose', 'number' => mt_rand(0,1) == 0 ? -2 : 2],
        ]);

        //bread
        $product_id = DB::table('products')->insertGetId([
            'name' => 'Pão',
            'description' => 'Pão macio e agradável',
            'price' => 3/*mt_rand (1*10, 10*10) / 10*/,
            'slug' => 'pao',
            'type' => 'food',
            'image' => 'illustrations\products\bread.png',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('product_store')->insert(['product_id' => $product_id, 'store_id' => 1]);
        DB::table('effects')->insert([
            ['product_id' => $product_id, 'name' => 'Stamina', 'slug' => 'buff_stamina', 'type' => 'stamina', 'number' => 3],
            ['product_id' => $product_id, 'name' => 'Tensão', 'slug' => 'buff_tensao', 'type' => 'tensao', 'number' => mt_rand(0,1) == 0 ? -3 : 3],
            ['product_id' => $product_id, 'name' => 'Alcool', 'slug' => 'debuff_alcool', 'type' => 'embriaguez', 'number' => mt_rand(0,1) == 0 ? -2 : 2],
            ['product_id' => $product_id, 'name' => 'Energia', 'slug' => 'buff_energia', 'type' => 'energia', 'number' => mt_rand(0,1) == 0 ? -2 : 2],
            ['product_id' => $product_id, 'name' => 'Açucar', 'slug' => 'debuff_açucar', 'type' => 'glicose', 'number' => mt_rand(0,1) == 0 ? -2 : 2],
        ]);

        //Brigadeiro
        $product_id = DB::table('products')->insertGetId([
            'name' => 'Brigadeiro',
            'description' => 'Sobremesa oficialmente brasileira',
            'price' => 4/*mt_rand (1*10, 10*10) / 10*/,
            'slug' => 'brigadeiro',
            'type' => 'food',
            'image' => 'illustrations\products\brigadeiro.png',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('product_store')->insert(['product_id' => $product_id, 'store_id' => 1]);
        DB::table('effects')->insert([
            ['product_id' => $product_id, 'name' => 'Stamina', 'slug' => 'buff_stamina', 'type' => 'stamina', 'number' => 4],
            ['product_id' => $product_id, 'name' => 'Tensão', 'slug' => 'buff_tensao', 'type' => 'tensao', 'number' => mt_rand(0,1) == 0 ? -4 : 4],
            ['product_id' => $product_id, 'name' => 'Alcool', 'slug' => 'debuff_alcool', 'type' => 'embriaguez', 'number' => mt_rand(0,1) == 0 ? -2 : 2],
            ['product_id' => $product_id, 'name' => 'Energia', 'slug' => 'buff_energia', 'type' => 'energia', 'number' => mt_rand(0,1) == 0 ? -2 : 2],
            ['product_id' => $product_id, 'name' => 'Açucar', 'slug' => 'debuff_açucar', 'type' => 'glicose', 'number' => mt_rand(0,1) == 0 ? -2 : 2],
        ]);

        //Cake
        $product_id = DB::table('products')->insertGetId([
            'name' => 'Bolo',
            'description' => 'Um bolo recheado de chocolate',
            'price' => 5/*mt_rand (1*10, 10*10) / 10*/,
            'slug' => 'bolo',
            'image' => 'illustrations\products\cake.png',
            'type' => 'food',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('product_store')->insert(['product_id' => $product_id, 'store_id' => 1]);
        DB::table('effects')->insert([
            ['product_id' => $product_id, 'name' => 'Stamina', 'slug' => 'buff_stamina', 'type' => 'stamina', 'number' => 5],
            ['product_id' => $product_id, 'name' => 'Tensão', 'slug' => 'buff_tensao', 'type' => 'tensao', 'number' => mt_rand(0,1) == 0 ? -5 : 5],
            ['product_id' => $product_id, 'name' => 'Alcool', 'slug' => 'debuff_alcool', 'type' => 'embriaguez', 'number' => mt_rand(0,1) == 0 ? -2 : 2],
            ['product_id' => $product_id, 'name' => 'Energia', 'slug' => 'buff_energia', 'type' => 'energia', 'number' => mt_rand(0,1) == 0 ? -2 : 2],
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
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('product_store')->insert(['product_id' => $product_id, 'store_id' => 1]);
        DB::table('effects')->insert([
            ['product_id' => $product_id, 'name' => 'Stamina', 'slug' => 'buff_stamina', 'type' => 'stamina', 'number' => 6],
            ['product_id' => $product_id, 'name' => 'Tensão', 'slug' => 'buff_tensao', 'type' => 'tensao', 'number' => mt_rand(0,1) == 0 ? -6 : 6],
            ['product_id' => $product_id, 'name' => 'Alcool', 'slug' => 'debuff_alcool', 'type' => 'embriaguez', 'number' => mt_rand(0,1) == 0 ? -2 : 2],
            ['product_id' => $product_id, 'name' => 'Energia', 'slug' => 'buff_energia', 'type' => 'energia', 'number' => mt_rand(0,1) == 0 ? -2 : 2],
            ['product_id' => $product_id, 'name' => 'Açucar', 'slug' => 'debuff_açucar', 'type' => 'glicose', 'number' => mt_rand(0,1) == 0 ? -2 : 2],
        ]);

        //Chocolate
        $product_id = DB::table('products')->insertGetId([
            'name' => 'Chocolate',
            'description' => 'Mmmmmmm chocolate',
            'price' => 7/*mt_rand (1*10, 10*10) / 10*/,
            'slug' => 'chocolate',
            'type' => 'food',
            'image' => 'illustrations\products\chocolate.png',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('product_store')->insert(['product_id' => $product_id, 'store_id' => 1]);
        DB::table('effects')->insert([
            ['product_id' => $product_id, 'name' => 'Stamina', 'slug' => 'buff_stamina', 'type' => 'stamina', 'number' => 7],
            ['product_id' => $product_id, 'name' => 'Tensão', 'slug' => 'buff_tensao', 'type' => 'tensao', 'number' => mt_rand(0,1) == 0 ? -7 : 7],
            ['product_id' => $product_id, 'name' => 'Alcool', 'slug' => 'debuff_alcool', 'type' => 'embriaguez', 'number' => mt_rand(0,1) == 0 ? -2 : 2],
            ['product_id' => $product_id, 'name' => 'Energia', 'slug' => 'buff_energia', 'type' => 'energia', 'number' => mt_rand(0,1) == 0 ? -2 : 2],
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
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('product_store')->insert(['product_id' => $product_id, 'store_id' => 1]);
        DB::table('effects')->insert([
            ['product_id' => $product_id, 'name' => 'Stamina', 'slug' => 'buff_stamina', 'type' => 'stamina', 'number' => 8],
            ['product_id' => $product_id, 'name' => 'Tensão', 'slug' => 'buff_tensao', 'type' => 'tensao', 'number' => mt_rand(0,1) == 0 ? -8 : 8],
            ['product_id' => $product_id, 'name' => 'Alcool', 'slug' => 'debuff_alcool', 'type' => 'embriaguez', 'number' => mt_rand(0,1) == 0 ? -2 : 2],
            ['product_id' => $product_id, 'name' => 'Energia', 'slug' => 'buff_energia', 'type' => 'energia', 'number' => mt_rand(0,1) == 0 ? -2 : 2],
            ['product_id' => $product_id, 'name' => 'Açucar', 'slug' => 'debuff_açucar', 'type' => 'glicose', 'number' => mt_rand(0,1) == 0 ? -2 : 2],
        ]);

        //Donut
        $product_id = DB::table('products')->insertGetId([
            'name' => 'Donut',
            'description' => 'Rosquinha',
            'price' => 9/*mt_rand (1*10, 10*10) / 10*/,
            'slug' => 'donut',
            'type' => 'food',
            'image' => 'illustrations\products\donut.png',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('product_store')->insert(['product_id' => $product_id, 'store_id' => 1]);
        DB::table('effects')->insert([
            ['product_id' => $product_id, 'name' => 'Stamina', 'slug' => 'buff_stamina', 'type' => 'stamina', 'number' => 9],
            ['product_id' => $product_id, 'name' => 'Tensão', 'slug' => 'buff_tensao', 'type' => 'tensao', 'number' => mt_rand(0,1) == 0 ? -9 : 9],
            ['product_id' => $product_id, 'name' => 'Alcool', 'slug' => 'debuff_alcool', 'type' => 'embriaguez', 'number' => mt_rand(0,1) == 0 ? -2 : 2],
            ['product_id' => $product_id, 'name' => 'Energia', 'slug' => 'buff_energia', 'type' => 'energia', 'number' => mt_rand(0,1) == 0 ? -2 : 2],
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
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('product_store')->insert(['product_id' => $product_id, 'store_id' => 1]);
        DB::table('effects')->insert([
            ['product_id' => $product_id, 'name' => 'Stamina', 'slug' => 'buff_stamina', 'type' => 'stamina', 'number' => 1],
            ['product_id' => $product_id, 'name' => 'Tensão', 'slug' => 'buff_tensao', 'type' => 'tensao', 'number' => mt_rand(0,1) == 0 ? -1 : 1],
            ['product_id' => $product_id, 'name' => 'Alcool', 'slug' => 'debuff_alcool', 'type' => 'embriaguez', 'number' => mt_rand(0,1) == 0 ? -2 : 2],
            ['product_id' => $product_id, 'name' => 'Energia', 'slug' => 'buff_energia', 'type' => 'energia', 'number' => mt_rand(0,1) == 0 ? -2 : 2],
            ['product_id' => $product_id, 'name' => 'Açucar', 'slug' => 'debuff_açucar', 'type' => 'glicose', 'number' => mt_rand(0,1) == 0 ? -2 : 2],
        ]);

        //Peixe
        $product_id = DB::table('products')->insertGetId([
            'name' => 'Espetinho de peixe',
            'description' => 'Tilapia no espeto',
            'price' => 11/*mt_rand (1*10, 10*10) / 10*/,
            'slug' => 'peixe',
            'type' => 'food',
            'image' => 'illustrations\products\fish.png',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('product_store')->insert(['product_id' => $product_id, 'store_id' => 1]);
        DB::table('effects')->insert([
            ['product_id' => $product_id, 'name' => 'Stamina', 'slug' => 'buff_stamina', 'type' => 'stamina', 'number' => 1],
            ['product_id' => $product_id, 'name' => 'Tensão', 'slug' => 'buff_tensao', 'type' => 'tensao', 'number' => mt_rand(0,1) == 0 ? -1 : 1],
            ['product_id' => $product_id, 'name' => 'Alcool', 'slug' => 'debuff_alcool', 'type' => 'embriaguez', 'number' => mt_rand(0,1) == 0 ? -2 : 2],
            ['product_id' => $product_id, 'name' => 'Energia', 'slug' => 'buff_energia', 'type' => 'energia', 'number' => mt_rand(0,1) == 0 ? -2 : 2],
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
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('product_store')->insert(['product_id' => $product_id, 'store_id' => 1]);
        DB::table('effects')->insert([
            ['product_id' => $product_id, 'name' => 'Stamina', 'slug' => 'buff_stamina', 'type' => 'stamina', 'number' => 1],
            ['product_id' => $product_id, 'name' => 'Tensão', 'slug' => 'buff_tensao', 'type' => 'tensao', 'number' => mt_rand(0,1) == 0 ? -1 : 1],
            ['product_id' => $product_id, 'name' => 'Alcool', 'slug' => 'debuff_alcool', 'type' => 'embriaguez', 'number' => mt_rand(0,1) == 0 ? -2 : 2],
            ['product_id' => $product_id, 'name' => 'Energia', 'slug' => 'buff_energia', 'type' => 'energia', 'number' => mt_rand(0,1) == 0 ? -2 : 2],
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
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('product_store')->insert(['product_id' => $product_id, 'store_id' => 1]);
        DB::table('effects')->insert([
            ['product_id' => $product_id, 'name' => 'Stamina', 'slug' => 'buff_stamina', 'type' => 'stamina', 'number' => 1],
            ['product_id' => $product_id, 'name' => 'Tensão', 'slug' => 'buff_tensao', 'type' => 'tensao', 'number' => mt_rand(0,1) == 0 ? -1 : 1],
            ['product_id' => $product_id, 'name' => 'Alcool', 'slug' => 'debuff_alcool', 'type' => 'embriaguez', 'number' => mt_rand(0,1) == 0 ? -2 : 2],
            ['product_id' => $product_id, 'name' => 'Energia', 'slug' => 'buff_energia', 'type' => 'energia', 'number' => mt_rand(0,1) == 0 ? -2 : 2],
            ['product_id' => $product_id, 'name' => 'Açucar', 'slug' => 'debuff_açucar', 'type' => 'glicose', 'number' => mt_rand(0,1) == 0 ? -2 : 2],
        ]);

        //Hotdog
        $product_id = DB::table('products')->insertGetId([
            'name' => 'Hotdog',
            'description' => 'Famoso dogão',
            'price' => 14/*mt_rand (1*10, 10*10) / 10*/,
            'slug' => 'cachorro_quente',
            'type' => 'food',
            'image' => 'illustrations\products\hotdog.png',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('product_store')->insert(['product_id' => $product_id, 'store_id' => 1]);
        DB::table('effects')->insert([
            ['product_id' => $product_id, 'name' => 'Stamina', 'slug' => 'buff_stamina', 'type' => 'stamina', 'number' => 1],
            ['product_id' => $product_id, 'name' => 'Tensão', 'slug' => 'buff_tensao', 'type' => 'tensao', 'number' => mt_rand(0,1) == 0 ? -1 : 1],
            ['product_id' => $product_id, 'name' => 'Alcool', 'slug' => 'debuff_alcool', 'type' => 'embriaguez', 'number' => mt_rand(0,1) == 0 ? -2 : 2],
            ['product_id' => $product_id, 'name' => 'Energia', 'slug' => 'buff_energia', 'type' => 'energia', 'number' => mt_rand(0,1) == 0 ? -2 : 2],
            ['product_id' => $product_id, 'name' => 'Açucar', 'slug' => 'debuff_açucar', 'type' => 'glicose', 'number' => mt_rand(0,1) == 0 ? -2 : 2],
        ]);

        //Sorvete
        $product_id = DB::table('products')->insertGetId([
            'name' => 'Sorvete',
            'description' => 'Sobremesa refrescante',
            'price' => 15/*mt_rand (1*10, 10*10) / 10*/,
            'slug' => 'sorvete',
            'type' => 'food',
            'image' => 'illustrations\products\icecream.png',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('product_store')->insert(['product_id' => $product_id, 'store_id' => 1]);
        DB::table('effects')->insert([
            ['product_id' => $product_id, 'name' => 'Stamina', 'slug' => 'buff_stamina', 'type' => 'stamina', 'number' => 1],
            ['product_id' => $product_id, 'name' => 'Tensão', 'slug' => 'buff_tensao', 'type' => 'tensao', 'number' => mt_rand(0,1) == 0 ? -1 : 1],
            ['product_id' => $product_id, 'name' => 'Alcool', 'slug' => 'debuff_alcool', 'type' => 'embriaguez', 'number' => mt_rand(0,1) == 0 ? -2 : 2],
            ['product_id' => $product_id, 'name' => 'Energia', 'slug' => 'buff_energia', 'type' => 'energia', 'number' => mt_rand(0,1) == 0 ? -2 : 2],
            ['product_id' => $product_id, 'name' => 'Açucar', 'slug' => 'debuff_açucar', 'type' => 'glicose', 'number' => mt_rand(0,1) == 0 ? -2 : 2],
        ]);

        //Arroz Japones 
        $product_id = DB::table('products')->insertGetId([
            'name' => 'Arroz japonês',
            'description' => 'Son Gohan',
            'price' => 16/*mt_rand (1*10, 10*10) / 10*/,
            'slug' => 'japanese_rice',
            'type' => 'food',
            'image' => 'illustrations\products\japanese_rice.png',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('product_store')->insert(['product_id' => $product_id, 'store_id' => 1]);
        DB::table('effects')->insert([
            ['product_id' => $product_id, 'name' => 'Stamina', 'slug' => 'buff_stamina', 'type' => 'stamina', 'number' => 1],
            ['product_id' => $product_id, 'name' => 'Tensão', 'slug' => 'buff_tensao', 'type' => 'tensao', 'number' => mt_rand(0,1) == 0 ? -1 : 1],
            ['product_id' => $product_id, 'name' => 'Alcool', 'slug' => 'debuff_alcool', 'type' => 'embriaguez', 'number' => mt_rand(0,1) == 0 ? -2 : 2],
            ['product_id' => $product_id, 'name' => 'Energia', 'slug' => 'buff_energia', 'type' => 'energia', 'number' => mt_rand(0,1) == 0 ? -2 : 2],
            ['product_id' => $product_id, 'name' => 'Açucar', 'slug' => 'debuff_açucar', 'type' => 'glicose', 'number' => mt_rand(0,1) == 0 ? -2 : 2],
        ]);

        //Limonada
        $product_id = DB::table('products')->insertGetId([
            'name' => 'Limonada',
            'description' => 'Bebida refrescante, um tanto quanto amarga',
            'price' => 17/*mt_rand (1*10, 10*10) / 10*/,
            'slug' => 'limonada',
            'type' => 'drink',
            'image' => 'illustrations\products\limonade.png',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('product_store')->insert(['product_id' => $product_id, 'store_id' => 1]);
        DB::table('effects')->insert([
            ['product_id' => $product_id, 'name' => 'Stamina', 'slug' => 'buff_stamina', 'type' => 'stamina', 'number' => 1],
            ['product_id' => $product_id, 'name' => 'Tensão', 'slug' => 'buff_tensao', 'type' => 'tensao', 'number' => mt_rand(0,1) == 0 ? -1 : 1],
            ['product_id' => $product_id, 'name' => 'Alcool', 'slug' => 'debuff_alcool', 'type' => 'embriaguez', 'number' => mt_rand(0,1) == 0 ? -2 : 2],
            ['product_id' => $product_id, 'name' => 'Energia', 'slug' => 'buff_energia', 'type' => 'energia', 'number' => mt_rand(0,1) == 0 ? -2 : 2],
            ['product_id' => $product_id, 'name' => 'Açucar', 'slug' => 'debuff_açucar', 'type' => 'glicose', 'number' => mt_rand(0,1) == 0 ? -2 : 2],
        ]);

        //Leite
        $product_id = DB::table('products')->insertGetId([
            'name' => 'Leite',
            'description' => 'LEITE',
            'price' => 18/*mt_rand (1*10, 10*10) / 10*/,
            'slug' => 'leite',
            'type' => 'drink',
            'image' => 'illustrations\products\milk.png',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('product_store')->insert(['product_id' => $product_id, 'store_id' => 1]);
        DB::table('effects')->insert([
            ['product_id' => $product_id, 'name' => 'Stamina', 'slug' => 'buff_stamina', 'type' => 'stamina', 'number' => 1],
            ['product_id' => $product_id, 'name' => 'Tensão', 'slug' => 'buff_tensao', 'type' => 'tensao', 'number' => mt_rand(0,1) == 0 ? -1 : 1],
            ['product_id' => $product_id, 'name' => 'Alcool', 'slug' => 'debuff_alcool', 'type' => 'embriaguez', 'number' => mt_rand(0,1) == 0 ? -2 : 2],
            ['product_id' => $product_id, 'name' => 'Energia', 'slug' => 'buff_energia', 'type' => 'energia', 'number' => mt_rand(0,1) == 0 ? -2 : 2],
            ['product_id' => $product_id, 'name' => 'Açucar', 'slug' => 'debuff_açucar', 'type' => 'glicose', 'number' => mt_rand(0,1) == 0 ? -2 : 2],
        ]);

        //Milkshake
        $product_id = DB::table('products')->insertGetId([
            'name' => 'Milkshake',
            'description' => '"Me ve um Milkshake de morango"',
            'price' => 19/*mt_rand (1*10, 10*10) / 10*/,
            'slug' => 'milkshake',
            'type' => 'drink',
            'image' => 'illustrations\products\milkshake.png',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('product_store')->insert(['product_id' => $product_id, 'store_id' => 1]);
        DB::table('effects')->insert([
            ['product_id' => $product_id, 'name' => 'Stamina', 'slug' => 'buff_stamina', 'type' => 'stamina', 'number' => 1],
            ['product_id' => $product_id, 'name' => 'Tensão', 'slug' => 'buff_tensao', 'type' => 'tensao', 'number' => mt_rand(0,1) == 0 ? -1 : 1],
            ['product_id' => $product_id, 'name' => 'Alcool', 'slug' => 'debuff_alcool', 'type' => 'embriaguez', 'number' => mt_rand(0,1) == 0 ? -2 : 2],
            ['product_id' => $product_id, 'name' => 'Energia', 'slug' => 'buff_energia', 'type' => 'energia', 'number' => mt_rand(0,1) == 0 ? -2 : 2],
            ['product_id' => $product_id, 'name' => 'Açucar', 'slug' => 'debuff_açucar', 'type' => 'glicose', 'number' => mt_rand(0,1) == 0 ? -2 : 2],
        ]);

        //Pizza
        $product_id = DB::table('products')->insertGetId([
            'name' => 'Pizza',
            'description' => 'Pedaço do céu',
            'price' => 20/*mt_rand (1*10, 10*10) / 10*/,
            'slug' => 'pizza',
            'type' => 'food',
            'image' => 'illustrations\products\pizza.png',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('product_store')->insert(['product_id' => $product_id, 'store_id' => 1]);
        DB::table('effects')->insert([
            ['product_id' => $product_id, 'name' => 'Stamina', 'slug' => 'buff_stamina', 'type' => 'stamina', 'number' => 2],
            ['product_id' => $product_id, 'name' => 'Tensão', 'slug' => 'buff_tensao', 'type' => 'tensao', 'number' => mt_rand(0,1) == 0 ? -2 : 2],
            ['product_id' => $product_id, 'name' => 'Alcool', 'slug' => 'debuff_alcool', 'type' => 'embriaguez', 'number' => mt_rand(0,1) == 0 ? -2 : 2],
            ['product_id' => $product_id, 'name' => 'Energia', 'slug' => 'buff_energia', 'type' => 'energia', 'number' => mt_rand(0,1) == 0 ? -2 : 2],
            ['product_id' => $product_id, 'name' => 'Açucar', 'slug' => 'debuff_açucar', 'type' => 'glicose', 'number' => mt_rand(0,1) == 0 ? -2 : 2],
        ]);

        //Batata Frita
        $product_id = DB::table('products')->insertGetId([
            'name' => 'Batata frita',
            'description' => 'Fritura nunca foi tão bom',
            'price' => 21/*mt_rand (1*10, 10*10) / 10*/,
            'slug' => 'fried_potato',
            'type' => 'food',
            'image' => 'illustrations\products\fried_potato.png',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('product_store')->insert(['product_id' => $product_id, 'store_id' => 1]);
        DB::table('effects')->insert([
            ['product_id' => $product_id, 'name' => 'Stamina', 'slug' => 'buff_stamina', 'type' => 'stamina', 'number' => 2],
            ['product_id' => $product_id, 'name' => 'Tensão', 'slug' => 'buff_tensao', 'type' => 'tensao', 'number' => mt_rand(0,1) == 0 ? -2 : 2],
            ['product_id' => $product_id, 'name' => 'Alcool', 'slug' => 'debuff_alcool', 'type' => 'embriaguez', 'number' => mt_rand(0,1) == 0 ? -2 : 2],
            ['product_id' => $product_id, 'name' => 'Energia', 'slug' => 'buff_energia', 'type' => 'energia', 'number' => mt_rand(0,1) == 0 ? -2 : 2],
            ['product_id' => $product_id, 'name' => 'Açucar', 'slug' => 'debuff_açucar', 'type' => 'glicose', 'number' => mt_rand(0,1) == 0 ? -2 : 2],
        ]);

        //Creme
        $product_id = DB::table('products')->insertGetId([
            'name' => 'Creme',
            'description' => 'Doce sabor nulo',
            'price' => 22/*mt_rand (1*10, 10*10) / 10*/,
            'slug' => 'cream',
            'type' => 'food',
            'image' => 'illustrations\products\cream.png',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('product_store')->insert(['product_id' => $product_id, 'store_id' => 1]);
        DB::table('effects')->insert([
            ['product_id' => $product_id, 'name' => 'Stamina', 'slug' => 'buff_stamina', 'type' => 'stamina', 'number' => 2],
            ['product_id' => $product_id, 'name' => 'Tensão', 'slug' => 'buff_tensao', 'type' => 'tensao', 'number' => mt_rand(0,1) == 0 ? -2 : 2],
            ['product_id' => $product_id, 'name' => 'Alcool', 'slug' => 'debuff_alcool', 'type' => 'embriaguez', 'number' => mt_rand(0,1) == 0 ? -2 : 2],
            ['product_id' => $product_id, 'name' => 'Energia', 'slug' => 'buff_energia', 'type' => 'energia', 'number' => mt_rand(0,1) == 0 ? -2 : 2],
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
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('product_store')->insert(['product_id' => $product_id, 'store_id' => 1]);
        DB::table('effects')->insert([
            ['product_id' => $product_id, 'name' => 'Stamina', 'slug' => 'buff_stamina', 'type' => 'stamina', 'number' => 2],
            ['product_id' => $product_id, 'name' => 'Tensão', 'slug' => 'buff_tensao', 'type' => 'tensao', 'number' => mt_rand(0,1) == 0 ? -2 : 2],
            ['product_id' => $product_id, 'name' => 'Alcool', 'slug' => 'debuff_alcool', 'type' => 'embriaguez', 'number' => mt_rand(0,1) == 0 ? -2 : 2],
            ['product_id' => $product_id, 'name' => 'Energia', 'slug' => 'buff_energia', 'type' => 'energia', 'number' => mt_rand(0,1) == 0 ? -2 : 2],
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
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('product_store')->insert(['product_id' => $product_id, 'store_id' => 1]);
        DB::table('effects')->insert([
            ['product_id' => $product_id, 'name' => 'Stamina', 'slug' => 'buff_stamina', 'type' => 'stamina', 'number' => 2],
            ['product_id' => $product_id, 'name' => 'Tensão', 'slug' => 'buff_tensao', 'type' => 'tensao', 'number' => mt_rand(0,1) == 0 ? -2 : 2],
            ['product_id' => $product_id, 'name' => 'Alcool', 'slug' => 'debuff_alcool', 'type' => 'embriaguez', 'number' => mt_rand(0,1) == 0 ? -2 : 2],
            ['product_id' => $product_id, 'name' => 'Energia', 'slug' => 'buff_energia', 'type' => 'energia', 'number' => mt_rand(0,1) == 0 ? -2 : 2],
            ['product_id' => $product_id, 'name' => 'Açucar', 'slug' => 'debuff_açucar', 'type' => 'glicose', 'number' => mt_rand(0,1) == 0 ? -2 : 2],
        ]);

        //Sopa
        $product_id = DB::table('products')->insertGetId([
            'name' => 'Sopa',
            'description' => 'Bom para dias frios',
            'price' => 25/*mt_rand (1*10, 10*10) / 10*/,
            'slug' => 'sopa',
            'type' => 'food',
            'image' => 'illustrations\products\soup.png',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('product_store')->insert(['product_id' => $product_id, 'store_id' => 1]);
        DB::table('effects')->insert([
            ['product_id' => $product_id, 'name' => 'Stamina', 'slug' => 'buff_stamina', 'type' => 'stamina', 'number' => 2],
            ['product_id' => $product_id, 'name' => 'Tensão', 'slug' => 'buff_tensao', 'type' => 'tensao', 'number' => mt_rand(0,1) == 0 ? -2 : 2],
            ['product_id' => $product_id, 'name' => 'Alcool', 'slug' => 'debuff_alcool', 'type' => 'embriaguez', 'number' => mt_rand(0,1) == 0 ? -2 : 2],
            ['product_id' => $product_id, 'name' => 'Energia', 'slug' => 'buff_energia', 'type' => 'energia', 'number' => mt_rand(0,1) == 0 ? -2 : 2],
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
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('product_store')->insert(['product_id' => $product_id, 'store_id' => 1]);
        DB::table('effects')->insert([
            ['product_id' => $product_id, 'name' => 'Stamina', 'slug' => 'buff_stamina', 'type' => 'stamina', 'number' => 2],
            ['product_id' => $product_id, 'name' => 'Tensão', 'slug' => 'buff_tensao', 'type' => 'tensao', 'number' => mt_rand(0,1) == 0 ? -2 : 2],
            ['product_id' => $product_id, 'name' => 'Alcool', 'slug' => 'debuff_alcool', 'type' => 'embriaguez', 'number' => mt_rand(0,1) == 0 ? -2 : 2],
            ['product_id' => $product_id, 'name' => 'Energia', 'slug' => 'buff_energia', 'type' => 'energia', 'number' => mt_rand(0,1) == 0 ? -2 : 2],
            ['product_id' => $product_id, 'name' => 'Açucar', 'slug' => 'debuff_açucar', 'type' => 'glicose', 'number' => mt_rand(0,1) == 0 ? -2 : 2],
        ]);

        //sushi
        $product_id = DB::table('products')->insertGetId([
            'name' => 'Sushi',
            'description' => 'Completamente maravilhoso',
            'price' => 27/*mt_rand (1*10, 10*10) / 10*/,
            'slug' => 'sushi',
            'type' => 'food',
            'image' => 'illustrations\products\sushi.png',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('product_store')->insert(['product_id' => $product_id, 'store_id' => 1]);
        DB::table('effects')->insert([
            ['product_id' => $product_id, 'name' => 'Stamina', 'slug' => 'buff_stamina', 'type' => 'stamina', 'number' => 2],
            ['product_id' => $product_id, 'name' => 'Tensão', 'slug' => 'buff_tensao', 'type' => 'tensao', 'number' => mt_rand(0,1) == 0 ? -2 : 2],
            ['product_id' => $product_id, 'name' => 'Alcool', 'slug' => 'debuff_alcool', 'type' => 'embriaguez', 'number' => mt_rand(0,1) == 0 ? -2 : 2],
            ['product_id' => $product_id, 'name' => 'Energia', 'slug' => 'buff_energia', 'type' => 'energia', 'number' => mt_rand(0,1) == 0 ? -2 : 2],
            ['product_id' => $product_id, 'name' => 'Açucar', 'slug' => 'debuff_açucar', 'type' => 'glicose', 'number' => mt_rand(0,1) == 0 ? -2 : 2],
        ]);

        //Chá
        $product_id = DB::table('products')->insertGetId([
            'name' => 'Chá',
            'description' => 'diurético',
            'price' => 28/*mt_rand (1*10, 10*10) / 10*/,
            'slug' => 'cha',
            'type' => 'drink',
            'image' => 'illustrations\products\tea.png',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('product_store')->insert(['product_id' => $product_id, 'store_id' => 1]);
        DB::table('effects')->insert([
            ['product_id' => $product_id, 'name' => 'Stamina', 'slug' => 'buff_stamina', 'type' => 'stamina', 'number' => 2],
            ['product_id' => $product_id, 'name' => 'Tensão', 'slug' => 'buff_tensao', 'type' => 'tensao', 'number' => mt_rand(0,1) == 0 ? -2 : 2],
            ['product_id' => $product_id, 'name' => 'Alcool', 'slug' => 'debuff_alcool', 'type' => 'embriaguez', 'number' => mt_rand(0,1) == 0 ? -2 : 2],
            ['product_id' => $product_id, 'name' => 'Energia', 'slug' => 'buff_energia', 'type' => 'energia', 'number' => mt_rand(0,1) == 0 ? -2 : 2],
            ['product_id' => $product_id, 'name' => 'Açucar', 'slug' => 'debuff_açucar', 'type' => 'glicose', 'number' => mt_rand(0,1) == 0 ? -2 : 2],
        ]);

        //Suco de tomate
        $product_id = DB::table('products')->insertGetId([
            'name' => 'Suco de tomate',
            'description' => 'Quem serve isso numa faculdade?',
            'price' => 29/*mt_rand (1*10, 10*10) / 10*/,
            'slug' => 'suco-de-tomate',
            'type' => 'drink',
            'image' => 'illustrations\products\tomato_juice.png',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('product_store')->insert(['product_id' => $product_id, 'store_id' => 1]);
        DB::table('effects')->insert([
            ['product_id' => $product_id, 'name' => 'Stamina', 'slug' => 'buff_stamina', 'type' => 'stamina', 'number' => 2],
            ['product_id' => $product_id, 'name' => 'Tensão', 'slug' => 'buff_tensao', 'type' => 'tensao', 'number' => mt_rand(0,1) == 0 ? -2 : 2],
            ['product_id' => $product_id, 'name' => 'Alcool', 'slug' => 'debuff_alcool', 'type' => 'embriaguez', 'number' => mt_rand(0,1) == 0 ? -2 : 2],
            ['product_id' => $product_id, 'name' => 'Energia', 'slug' => 'buff_energia', 'type' => 'energia', 'number' => mt_rand(0,1) == 0 ? -2 : 2],
            ['product_id' => $product_id, 'name' => 'Açucar', 'slug' => 'debuff_açucar', 'type' => 'glicose', 'number' => mt_rand(0,1) == 0 ? -2 : 2],
        ]);

        //Vinho
        $product_id = DB::table('products')->insertGetId([
            'name' => 'Vinho',
            'description' => 'Bebida feita a partir de uvas',
            'price' => 30/*mt_rand (1*10, 10*10) / 10*/,
            'slug' => 'vinho',
            'type' => 'drink',
            'image' => 'illustrations\products\wine.png',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('product_store')->insert(['product_id' => $product_id, 'store_id' => 1]);
        DB::table('effects')->insert([
            ['product_id' => $product_id, 'name' => 'Stamina', 'slug' => 'buff_stamina', 'type' => 'stamina', 'number' => 3],
            ['product_id' => $product_id, 'name' => 'Tensão', 'slug' => 'buff_tensao', 'type' => 'tensao', 'number' => mt_rand(0,1) == 0 ? -3 : 3],
            ['product_id' => $product_id, 'name' => 'Alcool', 'slug' => 'debuff_alcool', 'type' => 'embriaguez', 'number' => mt_rand(0,1) == 0 ? -2 : 2],
            ['product_id' => $product_id, 'name' => 'Energia', 'slug' => 'buff_energia', 'type' => 'energia', 'number' => mt_rand(0,1) == 0 ? -2 : 2],
            ['product_id' => $product_id, 'name' => 'Açucar', 'slug' => 'debuff_açucar', 'type' => 'glicose', 'number' => mt_rand(0,1) == 0 ? -2 : 2],
        ]);
        
        /*========================================
        =            Equipament store            =
        ========================================*/
        
        $product_id = DB::table('products')->insertGetId([
            'name' => 'Teclado velho',
            'description' => 'Lorem ipsum',
            'price' => 31/*mt_rand (1*10, 10*10) / 10*/,
            'slug' => 'teclado_velho',
            'type' => 'equipament',
            'image' => 'illustrations\products\wine.png',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('product_store')->insert(['product_id' => $product_id, 'store_id' => 3]);
        
        $product_id = DB::table('products')->insertGetId([
            'name' => 'Monitor 15 polegadas tubo',
            'description' => 'Lorem ipsum',
            'price' => 32/*mt_rand (1*10, 10*10) / 10*/,
            'slug' => 'monitor_15_polegadas_tubo',
            'type' => 'equipament',
            'image' => 'illustrations\products\wine.png',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('product_store')->insert(['product_id' => $product_id, 'store_id' => 3]);

        $product_id = DB::table('products')->insertGetId([
            'name' => 'Monitor 17 polegadas lcd',
            'description' => 'Lorem ipsum',
            'price' => 33/*mt_rand (1*10, 10*10) / 10*/,
            'slug' => 'monitor_17_polegadas',
            'type' => 'equipament',
            'image' => 'illustrations\products\wine.png',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('product_store')->insert(['product_id' => $product_id, 'store_id' => 3]);

        $product_id = DB::table('products')->insertGetId([
            'name' => 'Monitor 19 polegadas led',
            'description' => 'Lorem ipsum',
            'price' => 34/*mt_rand (1*10, 10*10) / 10*/,
            'slug' => 'monitor-19-polegadas-led',
            'type' => 'equipament',
            'image' => 'illustrations\products\wine.png',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('product_store')->insert(['product_id' => $product_id, 'store_id' => 3]);

        $product_id = DB::table('products')->insertGetId([
            'name' => 'Monitor 21 polegadas',
            'description' => 'Lorem ipsum',
            'price' => 35/*mt_rand (1*10, 10*10) / 10*/,
            'slug' => 'monitor-21-polegadas',
            'type' => 'equipament',
            'image' => 'illustrations\products\wine.png',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('product_store')->insert(['product_id' => $product_id, 'store_id' => 3]);

        $product_id = DB::table('products')->insertGetId([
            'name' => 'Monitor 25 Ultra Wide',
            'description' => 'Lorem ipsum',
            'price' => 36/*mt_rand (1*10, 10*10) / 10*/,
            'slug' => 'monitor-25-ultra-wide',
            'type' => 'equipament',
            'image' => 'illustrations\products\wine.png',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('product_store')->insert(['product_id' => $product_id, 'store_id' => 3]);

        $product_id = DB::table('products')->insertGetId([
            'name' => 'Monitor 21 polegadas duplo',
            'description' => 'Lorem ipsum',
            'price' => 37/*mt_rand (1*10, 10*10) / 10*/,
            'slug' => 'monitor-21-polegadas-duplo',
            'type' => 'equipament',
            'image' => 'illustrations\products\wine.png',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('product_store')->insert(['product_id' => $product_id, 'store_id' => 3]);

        $product_id = DB::table('products')->insertGetId([
            'name' => 'Monitor 29 Ultra Wide',
            'description' => 'Lorem ipsum',
            'price' => 38/*mt_rand (1*10, 10*10) / 10*/,
            'slug' => 'monitor-29-ultra-wide',
            'type' => 'equipament',
            'image' => 'illustrations\products\wine.png',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('product_store')->insert(['product_id' => $product_id, 'store_id' => 3]);

        $product_id = DB::table('products')->insertGetId([
            'name' => 'Monitor 29 duplo',
            'description' => 'Lorem ipsum',
            'price' => 39/*mt_rand (1*10, 10*10) / 10*/,
            'slug' => 'monitor-29-duplo',
            'type' => 'equipament',
            'image' => 'illustrations\products\wine.png',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('product_store')->insert(['product_id' => $product_id, 'store_id' => 3]);

        $product_id = DB::table('products')->insertGetId([
            'name' => 'Monitor 25 Ultra Wide Duplo',
            'description' => 'Lorem ipsum',
            'price' => 40/*mt_rand (1*10, 10*10) / 10*/,
            'slug' => 'monitor-25-ultra-wide-duplo',
            'type' => 'equipament',
            'image' => 'illustrations\products\wine.png',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('product_store')->insert(['product_id' => $product_id, 'store_id' => 3]);

        $product_id = DB::table('products')->insertGetId([
            'name' => 'Monitor 34 Ultra Wide Curvo',
            'description' => 'Lorem ipsum',
            'price' => 41/*mt_rand (1*10, 10*10) / 10*/,
            'slug' => 'monitor-34-ultra-wide-curvo',
            'type' => 'equipament',
            'image' => 'illustrations\products\wine.png',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('product_store')->insert(['product_id' => $product_id, 'store_id' => 3]);

        $product_id = DB::table('products')->insertGetId([
            'name' => 'Monitor 34 Ultra Wide Curvo duplo',
            'description' => 'Lorem ipsum',
            'price' => 42/*mt_rand (1*10, 10*10) / 10*/,
            'slug' => 'monitor-34-ultra-wide-curvo-duplo',
            'type' => 'equipament',
            'image' => 'illustrations\products\wine.png',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('product_store')->insert(['product_id' => $product_id, 'store_id' => 3]);

        $product_id = DB::table('products')->insertGetId([
            'name' => 'Monitor 34 Ultra Wide Curvo Triplo',
            'description' => 'Lorem ipsum',
            'price' => 43/*mt_rand (1*10, 10*10) / 10*/,
            'slug' => 'monitor-34-ultra-wide-curvo-triplo',
            'type' => 'equipament',
            'image' => 'illustrations\products\wine.png',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('product_store')->insert(['product_id' => $product_id, 'store_id' => 3]);
    }
}
