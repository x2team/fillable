<?php

namespace X2team\Commands;

use Illuminate\Support\ServiceProvider;
use X2team\Commands\ShowTableFieldCommand;


class X2teamServiceProvider extends ServiceProvider
{

    protected $package_name = 'fillable';

    protected $array_command = [
        ShowTableFieldCommand::class,
    ];


    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->commands($this->array_command);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
