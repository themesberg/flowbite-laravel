<?php

namespace Flowbite\FlowbiteLaravel;

use Flowbite\FlowbiteLaravel\Commands\FlowbiteLaravelCommand;
use Flowbite\FlowbiteLaravel\View\Components\Input;
use Illuminate\Support\Facades\Blade;
use Illuminate\View\Compilers\BladeCompiler;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class FlowbiteLaravelServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('flowbite-laravel')
            ->hasConfigFile()
            ->hasViews()

            ->hasMigration('create_flowbite-laravel_table')
            ->hasCommand(FlowbiteLaravelCommand::class);
    }

    public function packageBooted()
    {
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'flowbite-laravel');
        $this->configureComponents();
    }

    protected function configureComponents()
    {
        $this->callAfterResolving(BladeCompiler::class, function () {
            $this->registerComponent('input', 'input.index');
            //$this->registerComponent('input.floated');
        });
    }

    /**
     * Register the given component.
     *
     * @param  string  $component
     * @return void
     */
    protected function registerComponent(string $component, ?string $file = null)
    {
        $prefix = config('flowbite-laravel.prefix', '');
        if (! empty($prefix)) {
            $prefix .= "-";
        }
        Blade::component('flowbite-laravel::components.'.($file ?? $component), $prefix.$component);
    }
}
