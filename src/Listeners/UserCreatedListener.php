<?php

namespace Stoffelio\NewestUsers\Listeners;

use Statamic\Events\UserSaved;

class UserCreatedListener
{
    public function handle(UserSaved $event)
    {
        if  (!$event->user->get('created_at')) {
            $entry->set('created_at', now());
            $entry->saveQuietly();
        }
    }
}
