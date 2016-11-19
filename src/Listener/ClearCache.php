<?php namespace Websemantics\PyrocmsTheme\Listener;

use Anomaly\SettingsModule\Setting\Event\SettingsWereSaved;

/**
 * Class ClearCache
 *
 * @link      http://websemantics.ca
 * @author    WebSemantics, Inc. <info@websemantics.ca>
 * @author    Adnan M.Sagar, PhD. <adnan@websemantics.ca>
 * @package   Websemantics\PyrocmsTheme\Support
 */

class ClearCache
{
    /**
     * Clear cache for WebSemantics PyroCMS Theme.
     *
     * @param SettingsWereSaved $event
     */
    public function handle(SettingsWereSaved $event)
    {
        if($event->getBuilder()->getEntry() === 'websemantics.theme.pyrocms'){
            \Artisan::call('assets:clear');
            \Artisan::call('view:clear');
            \Artisan::call('twig:clean');
        }
    }
}
