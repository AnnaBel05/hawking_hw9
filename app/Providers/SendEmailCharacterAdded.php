<?php

namespace App\Providers;

use App\Providers\CharacterAdded;
use Exception;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

class SendEmailCharacterAdded
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
     * @param  \App\Providers\CharacterAdded  $event
     * @return void
     */
    public function handle(CharacterAdded $event)
    {    

        try 
        {
            Mail::to(env('MAIL_TEST'))->send(new NewCharacterAdded($event->character));
        } 
        catch (Exception $ex) 
        {
            Log::error($ex->getMessage());
        }
    }
}
