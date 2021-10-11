<?php

namespace Stoffelio\NewestUsers;

use Statamic\Providers\AddonServiceProvider;
use Stoffelio\NewestUsers\Widgets\NewestUsers;
use Stoffelio\NewestUsers\Listeners\UserCreatedListener;
use Statamic\Facades\User;
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

    public function boot()
    {
        parent::boot();

        \Statamic::afterInstalled(function ($command) {
            $users = User::query()->get();
            foreach ($users as $user) {
                if (!$user->has('created_at')) {
                    $user->set('created_at', 0)
                        ->save();
                }
            }
        });
    }
}