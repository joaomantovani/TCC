<?php

use Illuminate\Database\Seeder;

use Carbon\Carbon;

class StoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$food_store_id = 1;

    	//Cantina
    	DB::table('stores')->insert([
    		'name' => 'Lanchonete',
    		'description' => 'Lanchonete da FATEC',
    		'slug' => 'lanchonete',
            'avatar_id' => 30,
    		'type' => 'food_store',
    	    'respect' => '0', 
    		'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
    		'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
    	]);

        //Hora do lanche
        DB::table('stores')->insert([
            'name' => 'Bar',
            'description' => 'Lanchonete que tem cerveja',
            'slug' => 'bar',
            'avatar_id' => 16,
            'type' => 'food_store',
            'respect' => '0', 
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        // Loja da esquina informática
        DB::table('stores')->insert([
            'name' => 'Loja de esquina',
            'description' => 'Compre umas muambas, não garanto o melhor preço',
            'slug' => 'esquina',
            'avatar_id' => 27,
            'type' => 'equipament_store',
            'respect' => '0', 
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        // Loja da esquina informática
        DB::table('stores')->insert([
            'name' => 'Loja Online',
            'description' => 'Se é mais barato, tem um motivo',
            'slug' => 'online',
            'avatar_id' => 11,
            'type' => 'equipament_store',
            'respect' => '0', 
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
