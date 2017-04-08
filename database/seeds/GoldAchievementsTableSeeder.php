<?php

use Illuminate\Database\Seeder;

use App\Models\Badge;
use App\Models\Achievement;
use Carbon\Carbon;

class GoldAchievementsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $badge_id = 3;

    	//Conseguir X numero de dinheiro
        DB::table('achievements')->insert([
        	'name' => 'Too rich',
        	'description' => 'Conseguir X dinheiros',
        	'slug' => 'GetXMoney',
        	'exp' => 10,
            'badge_id' => $badge_id, 
        	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        //Comprar tudo da loja de informatica
        DB::table('achievements')->insert([
        	'name' => 'Comprando tudo',
        	'description' => 'Comprar tudo da loja de software',
        	'slug' => 'BuyEverythingFromSoftwareStore',
        	'exp' => 25,
            'badge_id' => $badge_id, 
        	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        //Comprar tudo da loja de hardware
        DB::table('achievements')->insert([
        	'name' => 'Comprando tudo',
        	'description' => 'Comprar tudo da loja de hardware',
        	'slug' => 'BuyEverythingFromHardwareStore',
        	'exp' => 25,
            'badge_id' => $badge_id, 
        	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
