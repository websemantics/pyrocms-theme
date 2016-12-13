<?php namespace Websemantics\PyrocmsTheme\Support;

use Anomaly\SelectFieldType\SelectFieldType;
use Anomaly\Streams\Platform\Addon\AddonCollection;

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
    public function handle(SelectFieldType $fieldType, AddonCollection $addons)
    {
      $options = [];

      foreach($addons->withConfig('skin') as $id => $skin){
        $options[$skin->getId()] = $skin->getName();
      }

      $fieldType->setOptions($options);
    }
}
