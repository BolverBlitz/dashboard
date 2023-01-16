<?php

namespace App\Listeners;

class Verified
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
        if (! $event->user->email_verified_reward) {
            $event->user->increment('server_limit', $settings->user->server_limit_reward_after_verify_email);
            $event->user->increment('credits', $settings->user->credits_reward_after_verify_email);
        }
    }
}
