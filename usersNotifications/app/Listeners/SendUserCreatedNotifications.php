<?php

namespace App\Listeners;

use App\Events\UserCreated;
use App\Models\User;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Http;

class SendUserCreatedNotifications implements ShouldQueue
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(UserCreated $event): void
    {
        //
        Http::post('http://localhost:8080/api/notifications', [
            /*'title' => 'My Second Post',
            'body' => 'My Second Post Body' . $event->user,*/
            'event_user' => $event->user
        ]);
         
    }
}
