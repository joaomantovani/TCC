<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ActionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('actions')->insert([
        	'name' => 'Hackear um site',
            'description' => 'blablabla',
            'reward' => '100',
            'difficult_id' => null,
            'exp' => '250',
            'achievement_slug' => 'FirstActionCompleted',
            'energy_required' => '10',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
