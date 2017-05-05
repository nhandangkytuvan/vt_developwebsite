<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class UserLogEvent
{
    use InteractsWithSockets, SerializesModels;
    public $log;
    public $action;
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($log,$action)
    {
        $this->log = $log;
        $this->action = $action;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return Channel|array
     */
    public function broadcastOn()
    {
        return ['active-channel'];
        //return new PrivateChannel('channel-name');
    }
    public function broadcastAs()
    {
        return 'log-event';
    }
}
