<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
class PostEvent implements ShouldBroadcast
{
    use InteractsWithSockets, SerializesModels;
    public $log;
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($log)
    {
        $this->log = $log;

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
        return $this->log->log_action.'PostEvent';
    }
}
