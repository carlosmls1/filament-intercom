<?php

namespace carlosmls1\FilamentIntercom;

use Illuminate\Contracts\View\View;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class FilamentIntercomServiceProvider extends PackageServiceProvider
{
    public static string $name = 'filament-intercom';

    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('filament-intercom')
            ->hasConfigFile()
            ->hasViews()
            ->hasViewComposer('filament-intercom::tracking', function (View $view) {
                $config = config('filament-intercom');
                $canShow = $config['enabled'] &&
                    ! empty($config['base_url']) &&
                    ! empty($config['tracker_filename']) &&
                    ! empty($config['site_id']);
                $view->with(compact(
                    'config',
                    'canShow',
                ));
            });
    }
}
