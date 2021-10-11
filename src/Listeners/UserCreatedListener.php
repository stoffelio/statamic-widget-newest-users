<?php

namespace Stoffelio\NewestUsers\Listeners;

use Statamic\Events\UserSaved;

class UserCreatedListener
{
    public function handle(UserSaved $event)
    {
        if  (!$event->user->get('created_at')) {
            $event->user->set('created_at', time())
                        ->save();
        }
    }
}
