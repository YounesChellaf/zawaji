<?php

namespace App\Providers;
use Gate;
use Illuminate\Support\ServiceProvider;
use App\Permission;

class PermissionsServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        Permission::all()->map(function ($permission){

        });
    }
}
