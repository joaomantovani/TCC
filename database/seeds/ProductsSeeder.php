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
        DB::table('products')->insert([
            'name' => 'Cerveja',
            'description' => 'Lorem ipsum',
            'price' => mt_rand (1*10, 10*10) / 10,
            'slug' => 'cerveja',
            'type' => 'drink',
            'image' => 'illustrations\products\beer.png',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        //Bottle
        DB::table('products')->insert([
            'name' => 'Bottle',
            'description' => 'Lorem ipsum',
            'price' => mt_rand (1*10, 10*10) / 10,
            'slug' => 'bottle',
            'type' => 'drink',
            'image' => 'illustrations\products\bottle.png',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        //bread
        DB::table('products')->insert([
            'name' => 'Pão',
            'description' => 'Lorem ipsum',
            'price' => mt_rand (1*10, 10*10) / 10,
            'slug' => 'pao',
            'type' => 'food',
            'image' => 'illustrations\products\bread.png',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        //Brigadeiro
        DB::table('products')->insert([
            'name' => 'Brigadeiro',
            'description' => 'Lorem ipsum',
            'price' => mt_rand (1*10, 10*10) / 10,
            'slug' => 'brigadeiro',
            'type' => 'food',
            'image' => 'illustrations\products\brigadeiro.png',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        //Cake
        DB::table('products')->insert([
            'name' => 'Bolo',
            'description' => 'Lorem ipsum',
            'price' => mt_rand (1*10, 10*10) / 10,
            'slug' => 'bolo',
            'image' => 'illustrations\products\cake.png',
            'type' => 'food',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        //Cheese
        DB::table('products')->insert([
            'name' => 'Queijo',
            'description' => 'Lorem ipsum',
            'price' => mt_rand (1*10, 10*10) / 10,
            'slug' => 'queijo',
            'type' => 'food',
            'image' => 'illustrations\products\cheese.png',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        //Chocolate
        DB::table('products')->insert([
            'name' => 'Chocolate',
            'description' => 'Lorem ipsum',
            'price' => mt_rand (1*10, 10*10) / 10,
            'slug' => 'chocolate',
            'type' => 'food',
            'image' => 'illustrations\products\chocolate.png',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        //Café
        DB::table('products')->insert([
            'name' => 'Café',
            'description' => 'Lorem ipsum',
            'price' => mt_rand (1*10, 10*10) / 10,
            'slug' => 'coffee',
            'type' => 'drink',
            'image' => 'illustrations\products\coffee.png',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        //Donut
        DB::table('products')->insert([
            'name' => 'Donut',
            'description' => 'Lorem ipsum',
            'price' => mt_rand (1*10, 10*10) / 10,
            'slug' => 'donut',
            'type' => 'food',
            'image' => 'illustrations\products\donut.png',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        //Ovo
        DB::table('products')->insert([
            'name' => 'Ovo frito',
            'description' => 'Lorem ipsum',
            'price' => mt_rand (1*10, 10*10) / 10,
            'slug' => 'fried_egg',
            'type' => 'food',
            'image' => 'illustrations\products\egg.png',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        //Peixe
        DB::table('products')->insert([
            'name' => 'Espetinho de peixe',
            'description' => 'Lorem ipsum',
            'price' => mt_rand (1*10, 10*10) / 10,
            'slug' => 'peixe',
            'type' => 'food',
            'image' => 'illustrations\products\fish.png',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        //Presunto
        DB::table('products')->insert([
            'name' => 'Presunto',
            'description' => 'Lorem ipsum',
            'price' => mt_rand (1*10, 10*10) / 10,
            'slug' => 'presunto',
            'type' => 'food',
            'image' => 'illustrations\products\ham.png',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        //Hamburguer
        DB::table('products')->insert([
            'name' => 'Hamburguer',
            'description' => 'Lorem ipsum',
            'price' => mt_rand (1*10, 10*10) / 10,
            'slug' => 'hamburguer',
            'type' => 'food',
            'image' => 'illustrations\products\hamburguer.png',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        //Hotdog
        DB::table('products')->insert([
            'name' => 'Hotdog',
            'description' => 'Lorem ipsum',
            'price' => mt_rand (1*10, 10*10) / 10,
            'slug' => 'cachorro_quente',
            'type' => 'food',
            'image' => 'illustrations\products\hotdog.png',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        //Sorvete
        DB::table('products')->insert([
            'name' => 'Sorvete',
            'description' => 'Lorem ipsum',
            'price' => mt_rand (1*10, 10*10) / 10,
            'slug' => 'sorvete',
            'type' => 'food',
            'image' => 'illustrations\products\icecream.png',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        //Arroz Japones 
        DB::table('products')->insert([
            'name' => 'Arroz japonês',
            'description' => 'Lorem ipsum',
            'price' => mt_rand (1*10, 10*10) / 10,
            'slug' => 'japanese_rice',
            'type' => 'food',
            'image' => 'illustrations\products\japanese_rice.png',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        //Limonada
        DB::table('products')->insert([
            'name' => 'Limonada',
            'description' => 'Lorem ipsum',
            'price' => mt_rand (1*10, 10*10) / 10,
            'slug' => 'limonada',
            'type' => 'drink',
            'image' => 'illustrations\products\limonade.png',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        //Leite
        DB::table('products')->insert([
            'name' => 'Leite',
            'description' => 'Lorem ipsum',
            'price' => mt_rand (1*10, 10*10) / 10,
            'slug' => 'leite',
            'type' => 'drink',
            'image' => 'illustrations\products\milk.png',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        //Milkshake
        DB::table('products')->insert([
            'name' => 'Milkshake',
            'description' => 'Lorem ipsum',
            'price' => mt_rand (1*10, 10*10) / 10,
            'slug' => 'milkshake',
            'type' => 'drink',
            'image' => 'illustrations\products\milkshake.png',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        //Pizza
        DB::table('products')->insert([
            'name' => 'Pizza',
            'description' => 'Lorem ipsum',
            'price' => mt_rand (1*10, 10*10) / 10,
            'slug' => 'pizza',
            'type' => 'food',
            'image' => 'illustrations\products\pizza.png',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        //Batata Frita
        DB::table('products')->insert([
            'name' => 'Batata frita',
            'description' => 'Lorem ipsum',
            'price' => mt_rand (1*10, 10*10) / 10,
            'slug' => 'fried_potato',
            'type' => 'food',
            'image' => 'illustrations\products\fried_potato.png',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        //Creme
        DB::table('products')->insert([
            'name' => 'Creme',
            'description' => 'Lorem ipsum',
            'price' => mt_rand (1*10, 10*10) / 10,
            'slug' => 'cream',
            'type' => 'food',
            'image' => 'illustrations\products\cream.png',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        //Salsicha
        DB::table('products')->insert([
            'name' => 'Salsicha',
            'description' => 'Lorem ipsum',
            'price' => mt_rand (1*10, 10*10) / 10,
            'slug' => 'salsicha',
            'type' => 'food',
            'image' => 'illustrations\products\sausage.png',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        //Refrigerante
        DB::table('products')->insert([
            'name' => 'Refrigerante',
            'description' => 'Lorem ipsum',
            'price' => mt_rand (1*10, 10*10) / 10,
            'slug' => 'refrigerante',
            'type' => 'drink',
            'image' => 'illustrations\products\soda.png',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        //Sopa
        DB::table('products')->insert([
            'name' => 'Sopa',
            'description' => 'Lorem ipsum',
            'price' => mt_rand (1*10, 10*10) / 10,
            'slug' => 'sopa',
            'type' => 'food',
            'image' => 'illustrations\products\soup.png',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        //Bife
        DB::table('products')->insert([
            'name' => 'Bife',
            'description' => 'Lorem ipsum',
            'price' => mt_rand (1*10, 10*10) / 10,
            'slug' => 'bife',
            'type' => 'food',
            'image' => 'illustrations\products\steak.png',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        //sushi
        DB::table('products')->insert([
            'name' => 'Sushi',
            'description' => 'Lorem ipsum',
            'price' => mt_rand (1*10, 10*10) / 10,
            'slug' => 'sushi',
            'type' => 'food',
            'image' => 'illustrations\products\sushi.png',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        //Chá
        DB::table('products')->insert([
            'name' => 'Chá',
            'description' => 'Lorem ipsum',
            'price' => mt_rand (1*10, 10*10) / 10,
            'slug' => 'cha',
            'type' => 'drink',
            'image' => 'illustrations\products\tea.png',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        //Suco de tomate
        DB::table('products')->insert([
            'name' => 'Suco de tomate',
            'description' => 'Lorem ipsum',
            'price' => mt_rand (1*10, 10*10) / 10,
            'slug' => 'suco-de-tomate',
            'type' => 'drink',
            'image' => 'illustrations\products\tomato_juice.png',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        //Vinho
        DB::table('products')->insert([
            'name' => 'Vinho',
            'description' => 'Lorem ipsum',
            'price' => mt_rand (1*10, 10*10) / 10,
            'slug' => 'vinho',
            'type' => 'drink',
            'image' => 'illustrations\products\wine.png',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
