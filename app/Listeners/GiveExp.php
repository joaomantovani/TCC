<?php

namespace App\Listeners;

use App\Events\Tutorial;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class GiveExp
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  Tutorial  $event
     * @return void
     */
    public function handle(Tutorial $event)
    {
        //Atribui a exp do achievemente para o jogador
        $event->user->stats->exp = $event->achievement->exp;
        $event->user->stats->save();
    }
}
