<?php

return [

    'label' => 'Müşteri Grubu',

    'plural_label' => 'Müşteri Grupları',

    'table' => [
        'name' => [
            'label' => 'Adı',
        ],
        'handle' => [
            'label' => 'Handle',
        ],
        'default' => [
            'label' => 'Varsayılan',
        ],
    ],

    'empty_state' => [
        'label' => 'Henüz müşteri grubu oluşturulmadı',
        'description' => '',
    ],

    'form' => [
        'name' => [
            'label' => 'Adı',
        ],
        'handle' => [
            'label' => 'Handle',
        ],
        'default' => [
            'label' => 'Varsayılan',
        ],
    ],

    'action' => [
        'delete' => [
            'notification' => [
                'error_protected' => 'İlişkili müşteriler olduğundan bu müşteri grubu silinemez.',
            ],
        ],
    ],
];
