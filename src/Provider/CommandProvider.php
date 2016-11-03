<?php

namespace Replay\Theme\Provider;

use Illuminate\Support\ServiceProvider;
use Replay\Theme\Command\InstallCommand;

class CommandProvider extends ServiceProvider
{
    public function boot()
    {
        $this->commands([
            InstallCommand::class,
        ]);
    }
}
