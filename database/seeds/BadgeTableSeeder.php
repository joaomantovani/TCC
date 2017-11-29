<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class BadgeTableSeeder extends Seeder
{
    public function run()
    {
    	//Bronze
        DB::table('badges')->insert([
        	'name' => 'Bronze',
            'type' => 'bronze',
            'color' => '#a5673f',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        //silver
        DB::table('badges')->insert([
        	'name' => 'Prata',
            'type' => 'silver',
            'color' => '#767676',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        //Gold
        DB::table('badges')->insert([
        	'name' => 'Ouro',
            'type' => 'gold',
            'color' => '#fbbd08',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        //Platinum
        DB::table('badges')->insert([
        	'name' => 'Platina',
            'type' => 'platinum',
            'color' => '#00b5ad',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
