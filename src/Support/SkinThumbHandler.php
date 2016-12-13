<?php namespace Websemantics\PyrocmsTheme\Support;

use Anomaly\Streams\Platform\Image\Image;
use Anomaly\Streams\Platform\Addon\AddonCollection;
use Websemantics\PyrocmsTheme\PyrocmsTheme;

/**
 * Class SkinThumbHandler
 *
 * @link      http://websemantics.ca
 * @author    WebSemantics, Inc. <info@websemantics.ca>
 * @author    Adnan M.Sagar, PhD. <adnan@websemantics.ca>
 * @package   Websemantics\PyrocmsTheme\Support
 */

class SkinThumbHandler
{
    /**
     * Handle the options.
     *
     * @var string, addon namespace
     */
    public function handle($namespace, AddonCollection $addons, PyrocmsTheme $theme, Image $image)
    {
      /* get addon that has a cool theme skin, ahem! */
      if($addon = $addons->get($namespace)) {

        /* get skin preview, opt for no-preview if not */
        if(!file_exists($file = config($addon->getNamespace("skin.preview")))) {
            $file = $theme->getPath("docs/assets/img/nopreview.png");
        }

        /* set the skin preview image and scale to config thumb width */
        $image->setImage($file);
        $img = $image->makeImage();
        $ratio = config('websemantics.theme.pyrocms::config.thumb_width') / $img->getWidth();

        /* if retina flag is set, adjust image dimentions */
        $retina_factor = config('websemantics.theme.pyrocms::config.retina') ? 2 : 1;
        $width = ($img->getWidth() * $ratio * $retina_factor);
        $height = ($img->getHeight() * $ratio * $retina_factor);

        $ima_tag = $image->resize($width, $height)->image($namespace, ['class' => 'c-image', 'style' =>
            'width:'.($width / $retina_factor).'px;'.
            'height:'.($height / $retina_factor).'px'
        ]);

        /* return an image tag with discription */
        return ": <span class='text-muted'>". trans($addon->getDescription()) ."</span>$ima_tag";
      }

      return ": <span class='text-muted'>Error, something gone wrong!</span>";
    }
}
