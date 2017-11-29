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
        'App\Events\Villain' => [
            'App\Listeners\setVillain',
        ],

        'App\Events\Achievement' => [
            'App\Listeners\hasAchievement',
            'App\Listeners\setAchievement',
            'App\Listeners\showAchievement',
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
