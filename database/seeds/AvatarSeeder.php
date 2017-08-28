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
    	$avatar_files = scandir(base_path("public/illustrations/player_avatar/"));

    	$i = 1;
    	foreach ($avatar_files as $key => $value) {
    	    DB::table('avatars')->insert(['path' => 'illustrations/player_avatar/' . $i . '.jpeg']);
    	    $i++;
    	}
    }
}
