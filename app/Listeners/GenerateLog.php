<?php

namespace App\Listeners;

use App\Events\UserLogged;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

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
        $message = now() . " {$event->request->user()->name} Just {$event->type} from the Application";
        Storage::append('file.log', $message);
    }
}
