<?php

namespace Stoffelio\NewestUsers;

use Statamic\Providers\AddonServiceProvider;
use Stoffelio\NewestUsers\Widgets\NewestUsers;
use Stoffelio\NewestUsers\Listeners\UserCreatedListener;
use Statamic\Events\UserSaved;

class ServiceProvider extends AddonServiceProvider
{
    protected $viewNamespace = 'stoffelio';

    protected $listen =  [
        UserSaved::class => [UserCreatedListener::class]
    ];

    protected $widgets = [
        NewestUsers::class
    ];
}