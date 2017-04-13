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
        //Comprar primeiro item
        DB::table('products')->insert([
            'name' => 'Marguerita',
            'description' => 'Queijo, molho e tomate',
            'price' => 4.5,
            'slug' => 'marguerita',
            'type' => 'food',
            'image' => null,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        //Relacionamento
        DB::table('product_store')->insert([
            'product_id' => 1,
            'store_id' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        //Efeito
        DB::table('effects')->insert([
            'product_id' => 1,
            'name' => 'Mais stamina',
            'slug' => 'more_stamina',
            'type' => 'buff',
            'stats' => 'stamina',
            'number' => 20,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
