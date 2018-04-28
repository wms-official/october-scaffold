<?php namespace Wms\Scaffold;

use Illuminate\Support\Facades\App;
use System\Classes\PluginBase;

class Plugin extends PluginBase {
    public function pluginDetails() {
        return [
            'name'        => 'scaffold',
            'description' => 'No description provided yet...',
            'author'      => 'jexme',
            'icon'        => 'icon-leaf'
        ];
    }

    public function boot() {
        App::register('\Wms\Scaffold\Classes\ScaffoldServiceProvider');
    }
}
