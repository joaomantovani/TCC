<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Desabilita o mass assignment
        \Eloquent::unguard();

        //disable foreign key check for this connection before running seeders
        \DB::statement('SET FOREIGN_KEY_CHECKS = 0');

        //Remove todos os dados das tabelas e reseta o ID para 0
        \DB::table('badges')->truncate();
        \DB::table('achievements')->truncate();
        
        //Cria as badges
        $this->call(BadgeTableSeeder::class);

        //Cria os achievements
        $this->call(BronzeAchievementsTableSeeder::class);
        $this->call(SilverAchievementsTableSeeder::class);
        $this->call(GoldAchievementsTableSeeder::class);
        $this->call(PlatinumAchievementsTableSeeder::class);

        //Cria as ações
        $this->call(ActionsTableSeeder::class);

        //Enable the constraint check again
        \DB::statement('SET FOREIGN_KEY_CHECKS=1');
    }
}
