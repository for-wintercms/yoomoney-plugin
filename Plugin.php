<?php

namespace DS\YooMoney;

use Backend;
use System\Classes\PluginBase;

/**
 * YooMoney Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'YooMoney',
            'description' => 'YooMoney',
            'author'      => 'DS',
            'icon'        => 'icon-leaf'
        ];
    }
}
