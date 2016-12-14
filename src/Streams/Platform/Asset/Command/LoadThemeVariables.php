<?php namespace Websemantics\PyrocmsTheme\Streams\Platform\Asset\Command;

use Anomaly\Streams\Platform\Addon\Theme\ThemeCollection;
use Anomaly\Streams\Platform\Asset\Event\ThemeVariablesHaveLoaded;
use Anomaly\Streams\Platform\Addon\AddonCollection;
use Anomaly\Streams\Platform\Support\Collection;
use Illuminate\Contracts\Events\Dispatcher;
use Websemantics\Lcss2php\Lcss2php;

/**
 * Class LoadThemeVariables
 *
 * @link      http://websemantics.ca
 * @author    WebSemantics, Inc. <info@websemantics.ca>
 * @author    Adnan M.Sagar, PhD. <adnan@websemantics.ca>
 * @package   Websemantics\PyrocmsTheme\Support
 */

class LoadThemeVariables
  {
    /**
     * The theme/skin variables.
     *
     * @var Collection
     */
    protected $variables;

    /**
     * Create a new LoadThemeVariables instance.
     *
     * @param Collection $variables
     */
    public function __construct(Collection $variables)
    {
        $this->variables = $variables;
    }

    /**
     * Handle the command.
     *
     * @param Dispatcher      $events
     * @param ThemeCollection $themes
     * @param AddonCollection $addons
     */
    public function handle(Dispatcher $events, ThemeCollection $themes, AddonCollection $addons)
    {
        if (!$theme = $themes->current()) {
            return;
        }

        /* consider the theme and the skin variables in the correct order */
        $files= [$theme->getPath('resources/scss/theme/_variables.scss')];
        if($skin = $addons->get(config('websemantics.theme.pyrocms::config.skin'))){
            $files[] = realpath(config($skin->getNamespace("skin.import")) . '/skin/_variables.scss');
        }

        $variables = (new Lcss2php($files))->ignore([\Leafo\ScssPhp\Type::T_MAP, \Leafo\ScssPhp\Type::T_MIXIN]);

        foreach ($variables->all() as $key => $value) {
            $this->variables->put($key, $value);
        }

        $events->fire(new ThemeVariablesHaveLoaded($this->variables));
    }
}
