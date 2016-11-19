<?php namespace Websemantics\PyrocmsTheme\Support;

use Anomaly\Streams\Platform\Image\Image;
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
     */
    public function handle($id, PyrocmsTheme $theme, Image $image)
    {
        $skin = config('websemantics.theme.pyrocms::config.skins.'.$id);

        /* if skin preview is not provided, display a no-preview image */
        if(!file_exists($file = $theme->getPath("docs/assets/skin/$id.png"))) {
            $file = $theme->getPath("docs/assets/skin/nopreview.png");
        }
        
        /* set the skin preview image and scale to config thumb width */
        $image->setImage($file);
        $img = $image->makeImage();
        $ratio = config('websemantics.theme.pyrocms::config.thumb_width') / $img->getWidth();
        
        /* if retina flag is set, adjust image dimentions */
        $retina_factor = config('websemantics.theme.pyrocms::config.retina') ? 2 : 1;
        $width = ($img->getWidth() * $ratio * $retina_factor);
        $height = ($img->getHeight() * $ratio * $retina_factor);

        $ima_tag = $image->resize($width, $height)->image($id, ['class' => 'c-image', 'style' => 
            'width:'.($width / $retina_factor).'px;'.
            'height:'.($height / $retina_factor).'px'
        ]);

        /* return an image tag with discription */
        return ": <span class='text-muted'>".$skin['description']."</span>$ima_tag";
    }
}