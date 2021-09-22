<?php

// declare(strict_types=1);

namespace MichelMelo\Periquita\UI;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Orchid\Icons\IconFinder;

class PeriquitaServiceProvider extends ServiceProvider
{
    /*
     * Bootstrap your package's services.
     *
     * @param IconFinder $iconFinder
     *
     * @return void
     */
    public function boot(IconFinder $iconFinder): void
    {
            $this->publishes([
                __DIR__ . '/../config/periquita.php' => config_path('periquita.php'),
            ], 'periquita');

            $this->loadViewsFrom(__DIR__ . '/../resources/views', 'periquita');

            collect(config('periquita.components', []))->each(fn($class, $alias) => Blade::component($alias, $class));
            collect(config('periquita.icons', []))->each(fn($key, $path) => $iconFinder->registerIconDirectory($key, $path));
    }

    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/periquita.php', 'periquita');
    }
}
