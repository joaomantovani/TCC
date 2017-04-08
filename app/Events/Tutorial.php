<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

use App\Models\achievement;

class Tutorial
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $success;
    public $achievement;
    public $user;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($tutorial)
    {
        $this->success = $tutorial['success'];
        $this->achievement = Achievement::with('badge')->where('slug', $tutorial['achievement'])->first();
        $this->user = $tutorial['user']->first();
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }
}