<?php

namespace Vortechron\VoyagerExtended\Listeners;

class CustomAdminRouting
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
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        require base_path('routes/voyager.php');
    }
}
