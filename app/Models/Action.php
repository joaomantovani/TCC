<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Action extends Model
{

    public static function randomMessageSucess()
    {
    	$random_message = ['Parabéns, seu trabalho e esforço recompensaram tudo no final das contas, não é mesmo?','Você é muito bom, foi la e conseguiu tudo que queria.','Ninguém é pareo para você','E mais uma vez você conseguiu','Isso foi muito tranquilo para você','Suas ações foram impressionantes, derrota não está no seu vocabulário','Suas habilidades ultrapassaram as fronteiras dessa vez','Fácil... fácil...','Wooooooow, você conseguiu!','Isso sim é uma combinação de sorte e destreza, você conseguiu!','Uma jogada de mestre, definitivamente','Muito talentoso, você foi la e fez mesmo!','Você por acaso é o #top1 jogador do servidor?',
    	];

    	// Retorna a posição aleatoria
    	return $random_message[array_rand($random_message)];
    }

    public static function randomMessageTitle()
    {
    	$random_title = [
    		'Sim!','Completado','Perfeito','Sucesso!','Um mito','Godlike','Fácil','Muito bom','Wooooow','Parabéns','W00T','Na mosca','Excelente','Transcendente',
    	];

    	// Retorna a posição aleatoria
    	return $random_title[array_rand($random_title)];
    }
}