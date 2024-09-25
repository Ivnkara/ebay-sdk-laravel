<?php

namespace Ivnkara\EbaySdkLaravel\Providers;

use Illuminate\Support\ServiceProvider;
use Ivnkara\EbaySdkLaravel\Ebay;

class EbayServiceProvider extends ServiceProvider
{

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes(
                [
                    __DIR__ . '/../../config/ebay.php' => config_path('ebay.php'),
                ],
                'config',
            );
        }

        $this->mergeConfigFrom(__DIR__ . '/../../config/ebay.php', 'ebay');
    }

    /**
     * Register the service provider.
     */
    public function register()
    {
        $this->app->singleton(Ebay::class);
    }
    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [Ebay::class];
    }

}
