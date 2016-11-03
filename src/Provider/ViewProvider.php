<?php

namespace Replay\Theme\Provider;

use Illuminate\Support\ServiceProvider;

class ViewProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(replay_theme_path("resources/views/auth"), "replay-auth");
        $this->loadViewsFrom(replay_theme_path("resources/views/theme"), "replay-theme");

        $this->publishes([
            replay_theme_path("resources/views/auth") => resource_path("views/vendor/replay-auth"),
            replay_theme_path("resources/views/theme") => resource_path("views/vendor/replay-theme"),
        ], "replay-theme-views");
    }
}
