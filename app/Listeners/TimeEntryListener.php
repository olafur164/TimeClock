<?php

namespace App\Listeners;

use App\Events\TimeEntryEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class TimeEntryListener
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
     * @param  TimeEntryEvent  $event
     * @return void
     */
    public function handle(TimeEntryEvent $event)
    {
        //
    }
}
