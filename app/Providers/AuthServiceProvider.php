<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
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
        Gate::define('isAdmin', function($user) {
            if(count($user->Role) > 0){
                foreach($user->Role as $item){
                    if($item->role === 'Admin'){
                        return true;
                    }else{
                        return false;
                    }
                }
            }
        });
        Gate::define('isModeator', function($user) {
            if(count($user->Role) > 0){
                foreach($user->Role as $item){
                    if($item->role === 'Modeator'){
                        return true;
                    }else{
                        return false;
                    }
                }
            }
        });
        Gate::define('isReporter', function($user) {
            if(count($user->Role) > 0){
                foreach($user->Role as $item){
                    if($item->role === 'Reporter'){
                        return true;
                    }else{
                        return false;
                    }
                }
            }
        });
        Gate::define('isSubscriber', function($user) {
            if(count($user->Role) > 0){
                foreach($user->Role as $item){
                    if($item->role === 'Subscriber'){
                        return true;
                    }else{
                        return false;
                    }
                }
            }
        });
    }
}
