<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ClassesSeeder extends Seeder
{
    public function run()
    {
    	//Jogos digitais
        DB::table('classes')->insert([
        	'name' => 'Jogos digitais',
        	'slug' => 'jogos-digitais',
            'short_name' => 'JD',
        	'slogan' => 'Y\'all need talos!',
            'description' => 
                '<p> A classe de jogos digitais se destaca pela sua critividade e ampla possibilidade de escolha de carreiras </p>' .
                '<p> Possui bônus para ficar acordado a noite e perde menos stamina que os outros na frente do computador </p>'
            ,
        	'advantages' => 
                '+ Audácia;' .
                'Bônus na madrugada'
            ,
    	   'disadvantages' => 
                '- Sorte;' .
                '- Produtivo de manhã'
            ,
        	'image' => null,
        	'secondary_image' => null,
        	'initial_inteligence' => 3,
        	'initial_charisma' => 2,
        	'initial_audacity' => 5,
        	'initial_luck' => 1,
        	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

    	//Segurança
        DB::table('classes')->insert([
        	'name' => 'Segurança da informação',
            'slogan' => '85931b3ecf8b88cede3e2df6653ecbfbcff0e5c0',
            'slug' => 'seguranca',
            'short_name' => 'SI',
            'description' => 
                '<p> Segurança da informação é voltada para pessoas que tenham a capacidade de se defender a ataques e atacar os outros, podendo ganhar muito dinheiro defendendo ou atacando servidores. </p>'
            ,
            'advantages' => 
                '+ Inteligência;' .
                'Bônus a noite'
            ,
           'disadvantages' => 
                '- Carisma;' .
                '- Produtivo de tarde'
            ,
        	'image' => null,
        	'secondary_image' => null,
        	'initial_inteligence' => 5,
        	'initial_charisma' => 1,
        	'initial_audacity' => 3,
        	'initial_luck' => 2,
        	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        //ADS
        DB::table('classes')->insert([
        	'name' => 'Análise e desenvolvimento de sistemas',
        	'slug' => 'ads',
            'short_name' => 'ADS',
            'slogan' => '"No meu computador funciona"',
            'description' => 
                '<p> O profissional em ADS analisa, projeta, testa, implanta e mantém sistemas. Esse profissional trabalha, também, com ferramentas computacionais, equipamentos de informática e metodologia de projetos na produção de sistemas. Raciocínio lógico, emprego de linguagens de programação e de metodologias de construção de projetos, preocupação com a qualidade, usabilidade, robustez, integridade e segurança de programas computacionais são fundamentais à atuação desse profissional. </p>'
            ,
            'advantages' => 
                '+ Sorte;' .
                'Bônus de manhã'
            ,
           'disadvantages' => 
                '- Audacia;' .
                '- Produtivo de noite'
            ,
        	'image' => null,
        	'secondary_image' => null,
        	'initial_inteligence' => 3,
        	'initial_charisma' => 2,
        	'initial_audacity' => 1,
        	'initial_luck' => 5,
        	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
