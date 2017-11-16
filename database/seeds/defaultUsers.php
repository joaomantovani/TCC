<?php

use Illuminate\Database\Seeder;

class defaultUsers extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	// 1 = JD
    	// 2 = SI 
    	// 3 = ADS

    	//Se não tiver nenhum jogador da classe de jogos digitais
        if (empty(DB::table('infos')->where('class_id', '1')->first())) {
        	DB::table('users')->insert([
        		'name' => 'illustrations/avatar/' . $i . '.png', 'active' => '0'
        	]);
        }
    }
}
