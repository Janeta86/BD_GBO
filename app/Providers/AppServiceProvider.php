<?php

namespace App\Providers;

use App\Models\order;
use App\Models\User;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Gate;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot()
    {
        Paginator::defaultView('pagination::default');
        Gate::define('destroy-order', function (User $user){
             return $user->Is_admin === true ;
        });

        Gate::define('order_edit', function (User $user){
            return $user->Is_admin === true;
        });

    }
}
