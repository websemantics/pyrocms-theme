<?php

return [

  /*
  |--------------------------------------------------------------------------
  | Skins
  |--------------------------------------------------------------------------
  |
  | A list of all the avilable skins
  |
  */
  
  'skins' => env('PYROCMS_SKINS', [
          'pyrocms' => [
              'name' => 'Offical PyroCMS',
              'description' => 'The official admin theme for PyroCMS, with a twist.',
              'author' => 'PyroCMS, Inc.'
          ],
          'default' => [
              'name' => 'Default',
              'description' => 'PyroCMS admin theme with a sidebar.',
              'author' => 'Web Semantics, Inc.'
          ],
          'classic' => [
              'name' => 'Classic',
              'description' => 'Default admin theme with a sidebar and a navbar.',
              'author' => 'Web Semantics, Inc.'
          ],
          'stone' => [
              'name' => 'Stone',
              'description' => 'A replica of the Stone Theme.',
              'author' => 'Web Semantics, Inc.'
          ],
          'github' => [
              'name' => 'Github',
              'description' => 'Github inspired admin theme for PyroCMS.',
              'author' => 'Web Semantics, Inc.'
          ],
          'blue' => [
              'name' => 'Navy Blue',
              'description' => 'A blue themed flaviour of PyroCMS admin.',
              'author' => 'Web Semantics, Inc.'
          ],
          'horizon' => [
              'name' => 'Horizon',
              'description' => 'Lightly colored skin with an immersed sidebar.',
              'author' => 'Web Semantics, Inc.'
          ]
  ]),

  /*
  |--------------------------------------------------------------------------
  | Skin
  |--------------------------------------------------------------------------
  |
  | Select from a collection of skins, 'pyrocms', 'default' with a sidebar, blue etc.
  |
  */
  
  'skin' => env('PYROCMS_SKIN', 'default'),

  /*
  |--------------------------------------------------------------------------
  | Thumbnail width
  |--------------------------------------------------------------------------
  |
  | Skin preview thumbnail width. 
  | Recommended original preview size, width = 1920px, height = 1080px.
  |
  */
  
  'thumb_width' => env('PYROCMS_THUMB_WIDTH', 400),

  /*
  |--------------------------------------------------------------------------
  | Retina
  |--------------------------------------------------------------------------
  |
  | Support for Retina display
  |
  */
  
  'retina' => env('PYROCMS_RETINA', true),

];
