<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class PaymentMade
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $email;

    public $message;
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->email = $email;
        $this->message  = "{$email} made payment to your account.";
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {

        return new PrivateChannel('payment-made');
    }
}
