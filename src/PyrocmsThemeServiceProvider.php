<?php namespace Websemantics\PyrocmsTheme;

use Anomaly\Streams\Platform\Addon\AddonServiceProvider;

/**
 * Class PyrocmsThemeServiceProvider
 *
 * @link      http://websemantics.ca
 * @author    WebSemantics, Inc. <info@websemantics.ca>
 * @author    Adnan M.Sagar, Phd. <adnan@websemantics.ca>
 * @copyright 2012-2016 Web Semantics, Inc.
 * @package   Websemantics\PyrocmsTheme
 */
class PyrocmsThemeServiceProvider extends AddonServiceProvider
{

    /**
     * The theme routes.
     *
     * @var array
     */
    protected $routes = [
        'admin/pyrocms-theme/thumb/{id}' => 'Websemantics\PyrocmsTheme\Support\SkinThumbHandler@handle'
    ];


     /**
     * The theme listeners.
     *
     * @var array
     */
    protected $listeners = [
        'Anomaly\SettingsModule\Setting\Event\SettingsWereSaved'                 => [
            'Websemantics\PyrocmsTheme\Listener\ClearCache',
        ],
    ];
}
