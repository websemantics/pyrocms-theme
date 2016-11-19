<?php

/* override pyrocms theme variables or add additional ones per skin */

/* TODO: this part is not working correctley as yet due to an inability to retrieve the value of a setting 
   field ealier than assetic sass filters processing this file. Note that this config variable has been bound 
   with a setting field but it would always retuen the default value. */

return array_merge(config('pyrocms.theme.pyrocms::variables'),
[
    'blue' => [
    ],
    'default' => [
        // 'border-radius'          => '.25rem',
        // 'border-radius-lg'       => '.3rem',
        // 'border-radius-sm'       => '.2rem',
    ],
    'github' => [
        // 'brand-primary'          => '#dd4b39',
        // 'gray-dark'              => '#353535',
        // 'gray'                   => '#3f3f41',
        // 'gray-light'             => '#929292',
        // 'gray-lighter'           => '#e0e0e0',
        // 'gray-lightest'          => '#f7f7f9',
        // 'body-bg'                => '#fff',
        // 'border-radius'          => '8px'
    ],    
    'pyrocms' => [
    ],    
    'stone' => [
        // 'brand-primary'          => '#43AAC5',
        // 'border-radius'          => '5px'
    ]
][config('websemantics.theme.pyrocms::config.skin')]);