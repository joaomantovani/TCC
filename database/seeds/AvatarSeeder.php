<?php

use Illuminate\Database\Seeder;

class AvatarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$player_avatar_files = scandir(base_path("public/illustrations/player_avatar/"));
        $npc_avatar_files = scandir(base_path("public/illustrations/avatar/"));

        $i = 1;
        //NPC avatar
        foreach ($npc_avatar_files as $key => $value) {
            DB::table('avatars')->insert(['path' => 'illustrations/avatar/' . $i . '.png', 'active' => '0']);
            $i++;
        }

        $i = 1;
        //Player avatar
        foreach ($player_avatar_files as $key => $value) {
            DB::table('avatars')->insert(['path' => 'illustrations/player_avatar/' . $i . '.jpeg']);
            $i++;
        }

    }
}
