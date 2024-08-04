<?php

namespace Jishadp\SaasLeadModule\Providers;

use Illuminate\Support\ServiceProvider;

class SaasLeadModuleServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {


    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'leads');
        $this->publishes([__DIR__.'/../database/migrations' => database_path('migrations/tenants')],'migrations');
        $this->publishes([__DIR__.'/../models' => app_path('Models/Tenants')],'models');
        $this->publishes([__DIR__.'/../datatables' => app_path('DataTables/User')],'datatables');
    }
}
