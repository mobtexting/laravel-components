<?php

namespace Mobtexting\LaravelComponents\Support;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider as BaseServiceProvider;
use Mobtexting\LaravelComponents\FormDataBinder;

class ServiceProvider extends BaseServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../../config/config.php' => config_path('laravel-components.php'),
            ], 'config');

            $this->publishes([
                __DIR__ . '/../../resources/views' => base_path('resources/views/vendor/laravel-components'),
            ], 'views');
        }

        $this->loadViewsFrom(__DIR__ . '/../../resources/views', 'laravel-components');

        $prefix = config('laravel-components.prefix');

        Collection::make(config('laravel-components.components'))->each(
            fn ($component, $alias) => Blade::component($alias, $component['class'], $prefix)
        );
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../../config/config.php', 'laravel-components');

        $this->app->singleton(FormDataBinder::class, fn () => new FormDataBinder);
    }
}
