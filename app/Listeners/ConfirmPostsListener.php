<?php

namespace App\Listeners;

use App\Events\ConfirmPosts;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class ConfirmPostsListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  ConfirmPosts  $event
     * @return void
     */
    public function handle(ConfirmPosts $event)
    {
        echo $event->item_event;
    }
}
