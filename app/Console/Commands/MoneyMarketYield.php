<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\User;

class MoneyMarketYield extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'money:yield';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Rende uma porcentagem de juros sobre o dinheiro investido no banco';

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
        \Log::info('[Cron] Rendendo dinheiro');

        //Pega todos os usuarios
        $users = User::all();        

        //Passa por todos
        foreach ($users as $key => $user) {
            if (!isset($user->account))
                continue;

            if ($user->account->money <= 0)
                continue;

            $user->account->calcJuros();
        }
    }
}
