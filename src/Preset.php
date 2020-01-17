<?php

namespace AWL;

use Illuminate\Support\Arr;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Foundation\Console\Presets\Preset as AlphaPreset;

class Preset extends AlphaPreset
{
    public static function install()
    {
        static::cleanSassDirectory();
        static::updatePackages();
        static::updateMix();
        static::updateScripts();
        static::updateStyles();
    }

    public static function cleanSassDirectory()
    {
        $file = new Filesystem();
        $file->cleanDirectory('resources/sass');
    }

    public static function updatePackageArray($packages)
    {
        return array_merge(['tailwindcss' => '^1.1.4']);
    }

    public static function updateMix()
    {
        copy(__DIR__.'/stubs/webpack.mix.js', base_path('webpack.mix.js'));
    }

    public static function updateScripts()
    {
        copy(__DIR__.'/stubs/bootstrap.js', resource_path('js/bootstrap.js'));
        copy(__DIR__.'/stubs/tailwind.js', base_path('tailwind.js'));
    }

    public static function updateStyles()
    {
        $file = new Filesystem();
        $content = '@tailwind base;' . PHP_EOL . '@tailwind components;' . PHP_EOL . '@tailwind utilities;';
        $file->put(resource_path('sass/app.scss'), $content);
    }
}
