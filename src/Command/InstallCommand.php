<?php

namespace Replay\Theme\Command;

use Illuminate\Console\Command;
use Replay\Theme\Provider\ViewProvider;

class InstallCommand extends Command
{
    /**nd
     * @var string
     */
    protected $signature = "replay-theme:install {--force}";

    /**
     * @var string
     */
    protected $description = "Install replay/theme files and configuration";

    public function handle()
    {
        $views = resource_path("views/vendor/replay-*");

        $force = $this->option("force");

        if (!$force) {
            $this->warn("This command will replace everything in your resources/views/vendor/replay folders.");
            $this->warn("To continue, add --force to the command.");

            return;
        }

        $previous = getcwd();

        chdir(__DIR__ . "/../../");

        passthru("rm -rf public/css");
        passthru("rm -rf public/js");
        passthru("yarn install || npm install");
        passthru("node_modules/.bin/gulp --production");

        chdir($previous);

        passthru(sprintf("rm -rf %s", $views));
        passthru(sprintf("cp -R %s %s", replay_theme_path("node_modules/bootstrap-sass/assets/fonts"), public_path("fonts")));
        passthru(sprintf("cp %s %s", replay_theme_path("public/css/replay.css"), public_path("css/replay.css")));
        passthru(sprintf("cp %s %s", replay_theme_path("public/js/replay.js"), public_path("js/replay.js")));

        $this->call("vendor:publish", [
            "--tag" => "replay-theme-views",
            "--provider" => ViewProvider::class,
        ]);
    }
}
