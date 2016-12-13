<?php

return [

  /*
  |--------------------------------------------------------------------------
  | Skin
  |--------------------------------------------------------------------------
  |
  | Select from a collection of skins, 'pyrocms', 'plus' with a sidebar, 'blue' etc.
  |
  */

  'skin' => env('PYROCMS_SKIN', 'websemantics.skin.plus'),

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

  /*
  |--------------------------------------------------------------------------
  | Sidebar settings
  |--------------------------------------------------------------------------
  |
  | - Exclude: list of modules to exclude from sidebar, for example,
  |
  |  'exclude' => [
  |    'anomaly.module.dashboard'
  |  ]
  |
  | - Sort: list of modules in order to be listed in sidebar, for example
  |
  |  'sort' => [
  |    'anomaly.module.posts',
  |    'anomaly.module.pages'
  |  ]
  |
  |  All module not in this list will be listed as per default cp behaviour.
  |  Also, you can combine 'sort' and 'exclude' to obtain the desired look.
  */

  'sidebar' => [
    'exclude' => [
    ],
    'sort' => [
    ]
  ]
];
