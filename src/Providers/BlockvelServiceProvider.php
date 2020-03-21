<?php

namespace Oasin\Blockvel\Providers;

use App;
use Illuminate\Support\ServiceProvider;


class BlockvelServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->publishConfig();
    }


    /**
     * Publish config file.
     *
     * @return void
     */
    public function publishConfig()
    {
        $configPath = realpath(__DIR__ . '/../../config/block_io.php');

        $this->publishes([
            $configPath => config_path('block_io.php'),
        ]);

        $this->mergeConfigFrom($configPath, 'blockvel');
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [];
    }
}
