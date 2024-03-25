<?php

namespace App\Events;

use App\Models\Report;
use App\Models\Detail;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class DetailCreated
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $detail;
    /**
     * Create a new event instance.
     */
    public function __construct(Detail $detail)
    {
        $this->detail = $detail;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return array<int, \Illuminate\Broadcasting\Channel>
     */
    public function broadcastOn(): array
    {
        return [
            new PrivateChannel('channel-name'),
        ];
    }
}
