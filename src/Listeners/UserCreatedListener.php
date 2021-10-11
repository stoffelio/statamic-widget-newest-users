<?php

namespace Stoffelio\NewestUsers\Listeners;

use Statamic\Events\UserSaved;

class UserCreatedListener
{
    public function handle(UserSaved $event)
    {
        if  (!$event->user->has('created_at')) {
            $event->user->set('created_at', time())
                        ->save();
        }
    }
}
