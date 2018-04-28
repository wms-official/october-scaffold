<?php namespace Wms\Scaffold\Classes;

use Illuminate\Support\ServiceProvider;
use Wms\Scaffold\Classes\Console\CreateController;
use Wms\Scaffold\Classes\Console\CreateModel;

class ScaffoldServiceProvider extends ServiceProvider {
    public function register() {
        $this->app->singleton('command.create.model.wms', function () {
            return new CreateModel;
        });

        $this->app->singleton('command.create.controller.wms', function () {
            return new CreateController;
        });

        $this->commands('command.create.model.wms');
        $this->commands('command.create.controller.wms');
    }

    public function provides() {
        return [
            'command.create.model',
            'command.create.controller',
        ];
    }
}
