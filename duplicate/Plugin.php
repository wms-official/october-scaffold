<?php namespace Wms\Duplicate;

use System\Classes\PluginBase;

/**
 * duplicate Plugin Information File
 */
class Plugin extends PluginBase {

    public function pluginDetails() {
        return [
            'name'        => 'duplicate',
            'description' => 'Копирование моделей',
            'author'      => 'jexme',
            'icon'        => 'icon-leaf'
        ];
    }
}