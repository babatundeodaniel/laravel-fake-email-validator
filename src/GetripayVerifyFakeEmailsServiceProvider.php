<?php

namespace Getripay\GetripayVerifyFakeEmails;

use Illuminate\Support\ServiceProvider;

class GetripayVerifyFakeEmailsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        /*
         * Optional methods to load your package assets
         */
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'getripay-verify-fake-emails');
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'getripay-verify-fake-emails');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        // $this->loadRoutesFrom(__DIR__.'/routes.php');

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/config.php' => config_path('getripay-verify-fake-emails.php'),
            ], 'config');

            // Publishing the views.
            /*$this->publishes([
                __DIR__.'/../resources/views' => resource_path('views/vendor/getripay-verify-fake-emails'),
            ], 'views');*/

            // Publishing assets.
            /*$this->publishes([
                __DIR__.'/../resources/assets' => public_path('vendor/getripay-verify-fake-emails'),
            ], 'assets');*/

            // Publishing the translation files.
            /*$this->publishes([
                __DIR__.'/../resources/lang' => resource_path('lang/vendor/getripay-verify-fake-emails'),
            ], 'lang');*/

            // Registering package commands.
            // $this->commands([]);
        }

        Validator::extend('not-fake-email', 'GetripayVerifyFakeEmails@validate');

    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'getripay-verify-fake-emails');

        // Register the main class to use with the facade
        $this->app->singleton('getripay-verify-fake-emails', function () {
            return new GetripayVerifyFakeEmails;
        });
    }
}
