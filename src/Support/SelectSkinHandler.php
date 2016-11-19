<?php namespace Websemantics\PyrocmsTheme\Support;

use Anomaly\SelectFieldType\SelectFieldType;

/**
 * Class SelectSkinHandler
 *
 * @link      http://websemantics.ca
 * @author    WebSemantics, Inc. <info@websemantics.ca>
 * @author    Adnan M.Sagar, PhD. <adnan@websemantics.ca>
 * @package   Websemantics\PyrocmsTheme\Support
 */

class SelectSkinHandler
{
    /**
     * Handle the options.
     *
     */
    public function handle(SelectFieldType $fieldType)
    {
      $options = [];
      foreach(config('websemantics.theme.pyrocms::config.skins') as $id => $skin){
        $options[$id] = $skin['name'];
      }

      $fieldType->setOptions($options);
    }
}