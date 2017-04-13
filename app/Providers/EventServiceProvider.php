<?php

namespace App\Providers;

use Illuminate\Support\Facades\Event;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        'App\Events\Tutorial' => [
            'App\Listeners\GiveBadge',
            'App\Listeners\GiveExp',
        ],

        'App\Events\Achievement' => [
            'App\Listeners\GiveBadge',
            'App\Listeners\GiveExp',
            'App\Listeners\ShowAnimation',
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }
}
