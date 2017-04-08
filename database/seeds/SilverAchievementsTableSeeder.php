<?php

use Illuminate\Database\Seeder;

use App\Models\Badge;
use App\Models\Achievement;
use Carbon\Carbon;

class SilverAchievementsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $badge_id = 2;

    	//Tutorial
        DB::table('achievements')->insert([
        	'name' => 'Getting rich beatch',
        	'description' => 'Conseguir X dinheiros',
        	'slug' => 'GetXMoney',
        	'exp' => 10,
            'badge_id' => $badge_id, 
        	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        //Comprar primeiro item
        DB::table('achievements')->insert([
        	'name' => 'Get out my way',
        	'description' => 'Enfrentar todos os vilões',
        	'slug' => 'DefeatAllEnemies',
        	'exp' => 25,
            'badge_id' => $badge_id, 
        	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
