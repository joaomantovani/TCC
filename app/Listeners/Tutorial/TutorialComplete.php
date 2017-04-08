<?php

namespace App\Listeners\Tutorial;

use App\Events\Tutorial;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class TutorialComplete
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
        
    }
}
