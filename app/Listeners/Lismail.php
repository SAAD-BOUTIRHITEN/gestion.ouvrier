<?php

namespace App\Listeners;

use App\Events\Evemail;
use App\Events\Evenmail;
use App\Mail\OrderShipped;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class Lismail
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
     * @param  \App\Events\Evenmail  $event
     * @return void
     */
    public function handle(Evemail $event)
    {
        Mail::to($event->user->email)->send(new OrderShipped($event->user));
    }
}