<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
class UserLogEvent implements ShouldBroadcast
{
    use InteractsWithSockets, SerializesModels;
    public $log;
    public $user_name;
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($log,$user_name)
    {
        $this->log = $log;
        $this->user_name = $user_name;
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
