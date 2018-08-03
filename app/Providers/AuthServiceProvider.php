<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('userMan', function ($users)
        {
            if($users ->user_type=='admin')
            {
               return true;
            }
            return false;
        });
        Gate::define('client', function ($users)
        {
            if($users ->user_type=='client')
            {
               return true;
            }
            return false;
        });
    }
}
