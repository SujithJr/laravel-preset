<?php

namespace AWL;

use AWL\Preset;
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
            $command->info("\nFinished!\n\n* Please run 'npm install', if you haven't yet.\n\n* And run 'npm run dev' to compile your assets.\n");
        });
    }
}
