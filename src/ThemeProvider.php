<?php

namespace Replay\Theme;

use Illuminate\Support\ServiceProvider;
use Replay\Theme\Provider\CommandProvider;
use Replay\Theme\Provider\ViewProvider;

class ThemeProvider extends ServiceProvider
{
    /**
     * @var string[]
     */
    private $providers = [
        CommandProvider::class,
        ViewProvider::class,
    ];

    public function register()
    {
        foreach ($this->providers as $provider) {
            $this->app->register($provider);
        }
    }
}
