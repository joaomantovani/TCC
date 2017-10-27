<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\User;

class RecoverStats extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'stats:recover';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Faz o calculo para recuperar os status conforme o tempo [cron]';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        //Pega todos os usuarios
        $users = User::all();

        \Log::info('[Cron] Recuperando stats');

        //Passa por todos
        foreach ($users as $key => $user) {
            //Verifica se a stamina não está cheio (diferente de 100)
            if ($user->stats->stamina != 100) {
                //Faz o calculo e recupera a stamina
                $user->stats->RecoverStats();
            }

            //Verifica se o jogador está sob pressão
            if ($user->stats->pression > 0 && $user->stats->pression <= 100) {
                //Reduz em 1 a pressão
                $user->stats->pression -= 1;
            }

            //salva as alterações
            $user->stats->save();
        }
    }
}
