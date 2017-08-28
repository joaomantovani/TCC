<?php

namespace App\Listeners;

use App\Events\Villain;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class setVillain
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
     * @param  Villain  $event
     * @return void
     */
    public function handle(Villain $event)
    {
        //
    }
}
