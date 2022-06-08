<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;

class NewCustomerHasContacted
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
    public $contact_us;

    /**
     * Create a new event instance.
     *
     * @param $contact_us
     */
    public function __construct($contact_us)
    {
        $this->contact_us = $contact_us;
        Log::info('NewCustomerHasContacted Event is called');
    }
}
