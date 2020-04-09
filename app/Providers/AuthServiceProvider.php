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
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        /* define a bac user role */
        Gate::define('isBAC', function($admin) {
            return $admin->role == 'BAC';
        });
      
        /* define a twg role */
        Gate::define('isTWG', function($admin) {
            return $admin->role == 'TWG';
        });
    }
}
