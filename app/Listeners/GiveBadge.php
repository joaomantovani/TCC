<?php

namespace App\Listeners;

use App\Events\Tutorial;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class GiveBadge
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    /**
     * Handle the event.
     *
     * @param  Tutorial  $event
     * @return void
     */
    public function handle(Tutorial $event)
    {
        //Da ao jogador o achievement (que acompanha a badge)
        $event->user->achievements()->attach($event->achievement);
    }
}
