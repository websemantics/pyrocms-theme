<?php namespace Websemantics\PyrocmsTheme\Streams\Platform\Asset;

use Anomaly\Streams\Platform\Asset\Filter\CoffeeFilter;
use Anomaly\Streams\Platform\Asset\Filter\CssMinFilter;
use Anomaly\Streams\Platform\Asset\Filter\JsMinFilter;
use Anomaly\Streams\Platform\Asset\Filter\LessFilter;
use Anomaly\Streams\Platform\Asset\Filter\NodeLessFilter;
use Anomaly\Streams\Platform\Asset\Filter\ParseFilter;
use Anomaly\Streams\Platform\Asset\Filter\RubySassFilter;
use Anomaly\Streams\Platform\Asset\Filter\RubyScssFilter;
use Anomaly\Streams\Platform\Asset\Filter\SassFilter;
use Websemantics\PyrocmsTheme\Streams\Platform\Asset\Filter\ScssFilter;
use Anomaly\Streams\Platform\Asset\Filter\SeparatorFilter;
use Anomaly\Streams\Platform\Asset\Filter\StylusFilter;
use Assetic\Filter\PhpCssEmbedFilter;

/**
 * Class Asset
 *
 * @link      http://websemantics.ca
 * @author    WebSemantics, Inc. <info@websemantics.ca>
 * @author    Adnan M.Sagar, PhD. <adnan@websemantics.ca>
 * @package   Websemantics\PyrocmsTheme\Support
 */

class Asset extends \Anomaly\Streams\Platform\Asset\Asset
{

  /**
   * Transform an array of filters to
   * an array of Assetic filters.
   *
   * @param  $filters
   * @param  $hint
   * @return mixed
   */
  protected function transformFilters($filters, $hint)
  {
      foreach ($filters as $k => &$filter) {

          /*
           * Parse Twg tags in the asset content.
           */
          if ($filter == 'parse') {
              $filter = new ParseFilter($this->parser);

              continue;
          }

          /*
           * Compile LESS to CSS with PHP.
           */
          if ($filter == 'less' && $this->config->get('streams::assets.filters.less', 'php') == 'php') {
              $filter = new LessFilter($this->parser);

              continue;
          }

          /*
           * Compile LESS to CSS with Node.
           */
          if ($filter == 'less' && $this->config->get('streams::assets.filters.less', 'php') == 'node') {
              $filter = new NodeLessFilter($this->parser);

              continue;
          }

          /*
           * Compile Stylus to CSS.
           */
          if ($filter == 'styl') {
              $filter = new StylusFilter($this->parser);

              continue;
          }

          /*
           * Compile SCSS to CSS with PHP.
           */
          if ($filter == 'scss' && $this->config->get('streams::assets.filters.sass', 'php') == 'php') {
              $filter = new ScssFilter($this->parser);

              continue;
          }

          /*
           * Compile SCSS to CSS with Ruby.
           */
          if ($filter == 'scss' && $this->config->get('streams::assets.filters.sass', 'php') == 'ruby') {
              $filter = new RubyScssFilter($this->parser);

              continue;
          }

          /*
           * Compile SASS to CSS with PHP.
           */
          if ($filter == 'sass' && $this->config->get('streams::assets.filters.sass', 'php') == 'php') {
              $filter = new SassFilter($this->parser);

              continue;
          }

          /*
           * Compile SASS to CSS with Ruby.
           */
          if ($filter == 'sass' && $this->config->get('streams::assets.filters.sass', 'php') == 'ruby') {
              $filter = new RubySassFilter($this->parser);

              continue;
          }

          /*
           * Compile CoffeeScript to JS
           */
          if ($filter == 'coffee') {
              $filter = new CoffeeFilter($this->parser);

              continue;
          }

          /*
           * Look for and embed CSS images.
           */
          if ($filter == 'embed') {
              $filter = new PhpCssEmbedFilter();

              continue;
          }

          /*
           * Minify JS
           */
          if ($filter == 'min' && $hint == 'js') {
              $filter = new JsMinFilter();

              continue;
          }

          /*
           * Minify CSS
           */
          if ($filter == 'min' && $hint == 'css') {
              $filter = new CssMinFilter();

              continue;
          }

          /*
           * Glob is a flag that's used later.
           */
          if ($filter == 'glob') {
              continue;
          }

          /*
           * No filter class could be determined!
           */
          $filter = null;
      }

      /*
       * Be sure to separate JS concatenations.
       */
      if ($hint == 'js') {
          $filters[] = new SeparatorFilter();
      }

      return array_filter($filters);
  }

}
