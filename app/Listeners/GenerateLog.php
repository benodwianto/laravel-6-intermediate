<?php

namespace App\Listeners;

use App\Events\UserLogged;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\Request;
use Illuminate\Queue\InteractsWithQueue;

class GenerateLog
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct(Request $request, $type)
    {
        // 
    }

    /**
     * Handle the event.
     *
     * @param  UserLogged  $event
     * @return void
     */
    public function handle(UserLogged $event)
    {
        //
    }
}
