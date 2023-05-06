<?php

namespace Alitindrawan24\IPWhitelist;

use Illuminate\Support\ServiceProvider;

class IPWhitelistServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/ip-whitelist.php', 'ip-whitelist');
    }

    /**
     * Bootstrap services.
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/ip-whitelist.php' => config_path('ip-whitelist.php'),
            ], 'config');
        }
    }
}
