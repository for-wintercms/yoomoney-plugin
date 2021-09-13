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
     * @var array Plugin dependencies
     */
    public $require = ['DS.DPay'];

    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'YooMoney API',
            'description' => 'YooMoney API plugin',
            'author'      => 'DS',
            'icon'        => 'icon-leaf'
        ];
    }
}
