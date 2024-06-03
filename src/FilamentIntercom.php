<?php

namespace carlosmls1\FilamentIntercom;

use Filament\Contracts\Plugin;
use Filament\Panel;
use Filament\View\PanelsRenderHook;

class FilamentIntercom implements Plugin
{
    public function getId(): string
    {
        return 'filament';//FilamentIntercomServiceProvider::$name;
    }

    public function register(Panel $panel): void
    {
        $panel->renderHook(
            PanelsRenderHook::BODY_END,
            fn () => view('filament-intercom::code'),
        );
    }

    public function boot(Panel $panel): void
    {

    }

    public static function make(): static
    {
        return app(static::class);
    }
}
