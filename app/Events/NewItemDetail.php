<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class NewItemDetail implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
    public $addedBy;
    public $content;
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($addedBy, $content)
    {
        //
        $this->addedBy = $addedBy;
        $this->content = $content;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        // return new PrivateChannel('new-item-detail');
        return ['new-item-detail'];
    }
}
