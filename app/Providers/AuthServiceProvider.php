<?php

namespace App\Providers;
use Illuminate\Support\Facades\Gate;


// use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //defining gates
        Gate::define('isAdmin', function($user){
            return $user->role=='admin';
        });

        Gate::define('isUser',function($user){
            return $user->role=='user';
        });

        Gate::define('isEditor',function($user){
            return $user->role=='editor';
        });

    }
}
