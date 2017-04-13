<?php

namespace App\Listeners;

use App\Events\Achievement;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class ShowAnimation
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
     * @param  Achievement  $event
     * @return void
     */
    public function handle(Achievement $event)
    {
        //
    }
}
