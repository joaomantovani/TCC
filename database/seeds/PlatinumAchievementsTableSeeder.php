<?php

use Illuminate\Database\Seeder;

use App\Models\Badge;
use App\Models\Achievement;
use Carbon\Carbon;

class PlatinumAchievementsTableSeeder extends Seeder
{
    public function run()
    {
    	$badge_id = 4;

        //Comprar primeiro item
        DB::table('achievements')->insert([
        	'name' => 'Quem vai encarar o campeão?',
        	'description' => 'Ser top #1 do servidor por 1 semana',
        	'slug' => 'BeTheTop1',
        	'exp' => 25,
            'badge_id' => $badge_id, 
        	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
