<?php

use Illuminate\Database\Seeder;

use Carbon\Carbon;

class FoodStoreSeeder extends Seeder
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
    		'name' => 'Cantina',
    		'description' => 'Lanchonete da FATEC',
    		'slug' => 'cantina',
    		'type' => 'food_store',
    	    'respect' => '0', 
    		'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
    		'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
    	]);

        //Hora do lanche
        DB::table('stores')->insert([
            'name' => 'Hora do lanche',
            'description' => 'Lanchonete que tem cerveja',
            'slug' => 'hora_do_lanche',
            'type' => 'food_store',
            'respect' => '1000', 
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
