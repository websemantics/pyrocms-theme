<?php namespace Websemantics\PyrocmsTheme\Streams\Platform\Asset\Filter;

use Anomaly\Streams\Platform\Asset\AssetParser;
use Anomaly\Streams\Platform\Asset\Command\LoadThemeVariables;
use Anomaly\Streams\Platform\Support\Collection;
use Assetic\Asset\AssetInterface;
use Leafo\ScssPhp\Compiler;

/**
 * Class ScssFilter
 *
 * @link      http://websemantics.ca
 * @author    WebSemantics, Inc. <info@websemantics.ca>
 * @author    Adnan M.Sagar, PhD. <adnan@websemantics.ca>
 * @package   Websemantics\PyrocmsTheme\Support
 */

class ScssFilter extends \Anomaly\Streams\Platform\Asset\Filter\ScssFilter
{

  /**
   * Create a new ScssFilter instance.
   *
   * @param AssetParser $parser
   */
  public function __construct(AssetParser $parser)
  {
    // Being lazy, http://www.hackingwithphp.com/6/7/2/private
    $this->importPaths = [base_path('core')];
    parent::__construct($parser);
}

  /**
   * Filters an asset just before it's dumped.
   *
   * @param AssetInterface $asset
   */
  public function filterDump(AssetInterface $asset)
  {
      $this->dispatch(new LoadThemeVariables($variables = new Collection()));

      $compiler = new Compiler();

      if ($dir = $asset->getSourceDirectory()) {
          $compiler->addImportPath($dir);
      }

      foreach ($this->importPaths as $path) {
          $compiler->addImportPath($path);
      }

      $compiler->setVariables($variables->all());

      $asset->setContent($this->parser->parse($compiler->compile($asset->getContent())));
  }
}
