<?php

return [
    'skin' => [
        'required'    => true,
        'placeholder' => false,
        'env'         => 'PYROCMS_SKIN',
        'bind'        => 'websemantics.theme.pyrocms::config.skin',
        'type'        => 'anomaly.field_type.select',
        'attributes'  => ['data-type' => 'image'],
        'config'      => [
            'mode' => 'radio',
            'default_value' => 'websemantics.skin.plus',
            'handler' => 'Websemantics\PyrocmsTheme\Support\SelectSkinHandler'
        ],
    ]
];
