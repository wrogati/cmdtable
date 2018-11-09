<?php

namespace Wrogati\CmdTable;

use Illuminate\Support\ServiceProvider;

class CmdTableServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->commands('Wrogati\CmdTable\Console\Commands\DbTable');
    }
}
