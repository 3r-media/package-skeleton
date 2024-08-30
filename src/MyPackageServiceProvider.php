<?php

namespace 3rMedia\:uc:package;

use Illuminate\Support\ServiceProvider;

class :uc:packageServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot(): void
    {
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', '3r-media');
        // $this->loadViewsFrom(__DIR__.'/../resources/views', '3r-media');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        // $this->loadRoutesFrom(__DIR__.'/../routes/:lc:package.php');

        if (!class_exists(':uc:package')) {
            class_alias(\3rMedia\:uc:package\Facades\:uc:package::class, ':uc:package');
        }
        // Publishing is only necessary when using the CLI.
        if ($this->app->runningInConsole()) {
            $this->bootForConsole();
        }
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register(): void
    {
//        $this->mergeConfigFrom(__DIR__.'/../config/:lc:package.php', ':lc:package');

        // Register the service the package provides.
        $this->app->singleton(':lc:package', function ($app) {
            return new :uc:package;
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [':lc:package'];
    }

    /**
     * Console-specific booting.
     *
     * @return void
     */
    protected function bootForConsole(): void
    {
        // Publishing the configuration file.
//        $this->publishes([
//            __DIR__.'/../config/:lc:package.php' => config_path(':lc:package.php'),
//        ], ':lc:package.config');

        // Publishing the views.
//        $this->publishes([
//            __DIR__.'/../resources/views' => base_path('resources/views/vendor/3r-media'),
//        ], ':lc:package.views');

        // Publishing the migrations.
//        $this->publishes([
//            __DIR__.'/../database/migrations' => database_path('migrations'),
//        ], ':lc:package.migrations');

        // Publishing assets.
//        $this->publishes([
//            __DIR__.'/../resources/assets' => public_path('vendor/3r-media'),
//        ], ':lc:package.assets');

        // Publishing the translation files.
//        $this->publishes([
//            __DIR__.'/../resources/lang' => resource_path('lang/vendor/3r-media'),
//        ], ':lc:package.lang');

        // Registering package commands.
//        $this->commands([]);
    }
}
