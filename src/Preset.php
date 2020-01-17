<?php

namespace AlphaPreset;

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
    }

    public static function cleanSassDirectory()
    {
        $file = new Filesystem();
        $file->cleanDirectory('resources/sass');
    }

    public static function updatePackageArray($packages)
    {
        return array_merge(['laravel-mix-tailwind' => '^2.1.7'], Arr::except($packages, [
            'lodash'
        ]));
    }

    public static function updateMix()
    {
        copy(__DIR__.'/stubs/webpack.mix.js', base_path('webpack.mix.js'));
    }

    public static function updateScripts()
    {
        copy(__DIR__.'/stubs/bootstrap.js', resource_path('js/bootstrap.js'));
    }
}

// "axios": "^0.19",
//         "cross-env": "^5.1",
//         "laravel-mix": "^5.0.1",
//         "lodash": "^4.17.13",
//         "resolve-url-loader": "^2.3.1",
//         "sass": "^1.15.2",
//         "sass-loader": "^8.0.0",
//         "vue": "^2.5.17"
