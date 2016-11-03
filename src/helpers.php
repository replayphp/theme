<?php

if (!function_exists("replay_theme_path")) {
    /**
     * @param null|string $path
     *
     * @return string
     */
    function replay_theme_path($path = null) {
        if ($path !== null) {
            return __DIR__ . "/../{$path}";
        }

        return __DIR__ . "/../";
    }
}