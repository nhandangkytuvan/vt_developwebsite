<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class UserLoginEvent
{
    use InteractsWithSockets, SerializesModels;
    public $action_type;
    public $user_name;
    public $user_id;
    public $content;
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($action_type,$user_name,$user_id,$content)
    {
        $this->action_type = $action_type;
        $this->user_name = $user_name;
        $this->user_id = $user_id;
        $this->content = $content;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('active-channel');
    }
}
