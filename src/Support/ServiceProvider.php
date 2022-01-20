<?php

declare(strict_types=1);

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
    public function boot(): void
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
        $framework = config('laravel-components.framework');

        Collection::make(config('laravel-components.components'))->each(
            function ($component, $alias) use ($prefix, $framework): void {
                if (isset($component['class'])) {
                    Blade::component($alias, $component['class'], $prefix);
                } else {
                    Blade::component(str_replace('{framework}', $framework, $component['view']), $alias, $prefix);
                }
            }
        );
    }

    /**
     * Register the application services.
     */
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__ . '/../../config/config.php', 'laravel-components');

        $this->app->singleton(FormDataBinder::class, fn () => new FormDataBinder());
    }
}
