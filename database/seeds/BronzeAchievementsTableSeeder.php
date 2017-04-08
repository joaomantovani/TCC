<?php

use Illuminate\Database\Seeder;

use App\Models\Badge;
use App\Models\Achievement;
use Carbon\Carbon;

class BronzeAchievementsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $badget_id = 1;

    	//Tutorial
        DB::table('achievements')->insert([
        	'name' => 'Tutorial Completo',
        	'description' => 'Você completou os seus primeiros passos!',
        	'slug' => 'TutorialCompleted',
        	'exp' => 10,
            'badge_id' => $badget_id, 
        	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        //Comprar primeiro item
        DB::table('achievements')->insert([
        	'name' => 'Armado e preparado',
        	'description' => 'Você comprou seu primeiro item',
        	'slug' => 'FirstItemBought',
        	'exp' => 25,
            'badge_id' => $badget_id, 
        	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        //Primeir deposito bancario
        DB::table('achievements')->insert([
        	'name' => 'Mundo das finanças',
        	'description' => 'Você depositou sua primeira quantia',
        	'slug' => 'BankMoneyDeposit',
        	'exp' => 10,
            'badge_id' => $badget_id, 
        	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        //Primeiro saque de dinheiro do banco
        DB::table('achievements')->insert([
        	'name' => 'Gastão',
        	'description' => 'Sacou dinheiro',
        	'slug' => 'BankMoneyWithdraw',
        	'exp' => 10,
            'badge_id' => $badget_id, 
        	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        //Verificar email
        DB::table('achievements')->insert([
        	'name' => 'Jogador confiavel',
        	'description' => 'Verificou seu email',
        	'slug' => 'EmailVerified',
        	'exp' => 10,
            'badge_id' => $badget_id, 
        	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        //Primeiro vilão "derrotado"
        DB::table('achievements')->insert([
        	'name' => 'Vítoria',
        	'description' => 'Derrotar o primeiro vilão',
        	'slug' => 'FirstEnemyDefeated',
        	'exp' => 10,
            'badge_id' => $badget_id, 
        	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        //Primeira ação completa
        DB::table('achievements')->insert([
            'name' => 'Primeiro passos',
            'description' => 'Completar a primeira ação',
            'slug' => 'FirstActionCompleted',
            'exp' => 50,
            'badge_id' => $badget_id, 
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
