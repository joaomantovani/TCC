<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ActionsTableSeeder extends Seeder
{
   //  private jd_id;
   //  private ads_id;
   //  private si_id;

   //  function __construct() {
   //      $this->jd_id = 1;
   //      $this->si_id = 2;
   //      $this->ads_id = 3;
   // }
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*==========================================================
        =            Aulas em comum com todos os cursos            =
        ==========================================================*/        
        DB::table('actions')->insert([
        	'name' => 'Programação I',
            'description' => 'Primeira aula de programação, muito básica, uns if, else, while e talvez um for... Não se preocupe muito não, você nem precisa de muito esforço para fazer essa aula.',
            'reward' => '100',
            'difficult' => 1,
            'exp' => '250',
            'class_id' => null,
            'achievement_slug' => null,
            'energy_required' => '5',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('actions')->insert([
            'name' => 'Programação II',
            'description' => 'Programação não é tão fácil assim né? Bem vindo ao dos códigos, seu inferno começa o aqui.',
            'reward' => '100',
            'difficult' => 4,
            'exp' => '250',
            'class_id' => null,
            'achievement_slug' => null,
            'energy_required' => '5',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('actions')->insert([
            'name' => 'Sistemas Operacionais',
            'description' => 'Abra uns computadores, troque umas peças, entenda pelo menos como funciona a estrutura de um computador',
            'reward' => '100',
            'difficult' => 1,
            'exp' => '250',
            'class_id' => null,
            'achievement_slug' => null,
            'energy_required' => '5',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('actions')->insert([
            'name' => 'Arquitetura',
            'description' => '01000001 01100110 01101001 01101110 01100001 01101100 00100000 01100100 01100001 01110011 00100000 01100011 01101111 01101110 01110100 01100001 01110011 00101100 00100000 01110100 01110101 01100100 01101111 00100000 11101001 00100000 01100110 01100101 01101001 01110100 01101111 00100000 01100100 01100101 00100000 00110000 00100000 01100101 00100000 00110001 00101100 00100000 01101110 11100011 01101111 00100000 11101001 00100000 01101101 01100101 01110011 01101101 01101111 00111111 ',
            'reward' => '100',
            'difficult' => 2,
            'exp' => '250',
            'class_id' => null,
            'achievement_slug' => null,
            'energy_required' => '5',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('actions')->insert([
            'name' => 'Redes de computadores',
            'description' => 'Não é so espetar o cabo RJ45 na parede, tem muita coisa por trás, aprenda a configurar uns ips e',
            'reward' => '100',
            'difficult' => 2,
            'exp' => '250',
            'class_id' => null,
            'achievement_slug' => null,
            'energy_required' => '5',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('actions')->insert([
            'name' => 'Matematica',
            'description' => 'Sem descrição',
            'reward' => '100',
            'difficult' => 4,
            'exp' => '250',
            'class_id' => null,
            'achievement_slug' => null,
            'energy_required' => '5',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('actions')->insert([
            'name' => 'Engenharia de Software',
            'description' => 'Sem descrição',
            'reward' => '100',
            'difficult' => 5,
            'exp' => '250',
            'class_id' => null,
            'achievement_slug' => null,
            'energy_required' => '5',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('actions')->insert([
            'name' => 'Programação avançada',
            'description' => 'Sem descrição',
            'reward' => '100',
            'difficult' => 7,
            'exp' => '250',
            'class_id' => null,
            'achievement_slug' => null,
            'energy_required' => '5',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('actions')->insert([
            'name' => 'Programação web',
            'description' => 'Sem descrição',
            'reward' => '100',
            'difficult' => 6,
            'exp' => '250',
            'class_id' => null,
            'achievement_slug' => null,
            'energy_required' => '5',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('actions')->insert([
            'name' => 'Banco de dados',
            'description' => 'Sem descrição',
            'reward' => '100',
            'difficult' => 4,
            'exp' => '250',
            'class_id' => null,
            'achievement_slug' => null,
            'energy_required' => '5',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        /*=====  End of Aulas em comum com todos os cursos  ======*/

        /*============================================================
        =            Aulas excluisvas para Jogos Digitais            =
        ============================================================*/
        DB::table('actions')->insert([
            'name' => 'Principios de Jogos',
            'description' => 'Sem descrição',
            'reward' => '100',
            'difficult' => 1,
            'exp' => '250',
            'class_id' => 1,
            'achievement_slug' => null,
            'energy_required' => '5',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        
        DB::table('actions')->insert([
            'name' => 'Ficção Interativa',
            'description' => 'Sem descrição',
            'reward' => '100',
            'difficult' => 2,
            'exp' => '250',
            'class_id' => 1,
            'achievement_slug' => null,
            'energy_required' => '5',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        
        DB::table('actions')->insert([
            'name' => 'Roterização de jogos',
            'description' => 'Sem descrição',
            'reward' => '100',
            'difficult' => 3,
            'exp' => '250',
            'class_id' => 1,
            'achievement_slug' => null,
            'energy_required' => '5',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        
        DB::table('actions')->insert([
            'name' => 'Jogos para web',
            'description' => 'Sem descrição',
            'reward' => '100',
            'difficult' => 4,
            'exp' => '250',
            'class_id' => 1,
            'achievement_slug' => null,
            'energy_required' => '5',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        
        DB::table('actions')->insert([
            'name' => 'Animação e Som',
            'description' => 'Sem descrição',
            'reward' => '100',
            'difficult' => 5,
            'exp' => '250',
            'class_id' => 1,
            'achievement_slug' => null,
            'energy_required' => '5',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        
        DB::table('actions')->insert([
            'name' => 'Inteligencia artificial',
            'description' => 'Sem descrição',
            'reward' => '100',
            'difficult' => 10,
            'exp' => '250',
            'class_id' => 1,
            'achievement_slug' => null,
            'energy_required' => '5',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        /*=====  End of Aulas excluisvas para Jogos Digitais  ======*/
        



        /*=================================================
        =            Exclusivos JOGOS DIGITAIS            =
        =================================================*/
        
        DB::table('actions')->insert([
            'name' => 'Criar um tetris',
            'description' => 'Sem descrição',
            'reward' => '100',
            'difficult' => 7,
            'exp' => '250',
            'class_id' => 1,
            'achievement_slug' => null,
            'energy_required' => '5',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        
        DB::table('actions')->insert([
            'name' => 'Criar um Floppy Bor',
            'description' => 'Sem descrição',
            'reward' => '100',
            'difficult' => 8,
            'exp' => '250',
            'class_id' => 1,
            'achievement_slug' => null,
            'energy_required' => '5',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        
        DB::table('actions')->insert([
            'name' => 'Criar um jogo plataform',
            'description' => 'Sem descrição',
            'reward' => '100',
            'difficult' => 9,
            'exp' => '250',
            'class_id' => 1,
            'achievement_slug' => null,
            'energy_required' => '5',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        

        DB::table('actions')->insert([
            'name' => 'Criar um jogo 3D',
            'description' => 'Sem descrição',
            'reward' => '100',
            'difficult' => 10,
            'exp' => '250',
            'class_id' => 1,
            'achievement_slug' => null,
            'energy_required' => '5',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        /*=====  End of Exclusivos JOGOS DIGITAIS  ======*/
        
    }
}

// // aulas comum
// Programação I
// Programação II
// Sistemas Operacionais
// Arquitetura
// Redes
// Matematica
// Engenharia de Software
// Programação avançada
// Programação web
// Banco de dados

// /*======================================
// =            Jogos Digitais            =
// ======================================*/

// // aulas jd
// Principios de Jogos
// Ficção Interativa
// Roterização de jogos
// Jogos para web
// Animação e Som
// Inteligencia artificial

// //Exclusivos jd
// Criar um tetris
// Criar um Floppy Bord
// Criar um jogo plataforma
// Criar um jogo 3D 

// =================================
// =            Segurança            =
// =================================

// // aulas si
// Principios da segurança
// criptografia
// Protocolos
// Perícia Forense
// Gestão de riscos
// Segurança em Banco de Dados

// //Exclusivos SI


// /*===========================
// =            ADS            =
// ===========================*/

// // aulas ads
// Arquitetura
// Sistema de informação
// Estrutura de dados
// Programação Orientada a Objetos
// Engenharia de software avançado
// Gestão de projetos
// Auditoria de Sistemas

// //Exclusivos ads
// Programar uma calculadora

