<?php

namespace AWL;

use AlphaPreset\Preset;
use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\Console\PresetCommand;

class AlphaServiceProvider extends ServiceProvider
{
    public function register()
    {
        //
    }

    public function boot()
    {
        PresetCommand::macro('alpha', function ($command) {
            Preset::install();
        });
    }
}
