<?php

namespace Stoffelio\NewestUsers;

use Statamic\Providers\AddonServiceProvider;
use Stoffelio\NewestUsers\Widgets\NewestUsers;

class ServiceProvider extends AddonServiceProvider
{
    protected $viewNamespace = 'stoffelio';

    protected $widgets = [
        NewestUsers::class
    ];
}