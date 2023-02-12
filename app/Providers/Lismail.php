<?php

namespace App\Providers;

use App\Mail\OrderShipped;
use App\Providers\Evenmail;
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
     * @param  \App\Providers\Evenmail  $event
     * @return void
     */
    public function handle(Evenmail $event)
    {
        Mail::to($event->user->email)->send(new OrderShipped($event->user));
    }
}