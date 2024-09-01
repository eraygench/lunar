<?php

return [

    'label' => 'Koleksiyon Grubu',

    'plural_label' => 'Koleksiyon Grupları',

    'table' => [
        'name' => [
            'label' => 'Adı',
        ],
        'handle' => [
            'label' => 'Handle',
        ],
        'collections_count' => [
            'label' => 'Koleksiyon Sayısı',
        ],
    ],

    'empty_state' => [
        'label' => 'Henüz koleksiyon grubu oluşturulmadı',
        'description' => '',
    ],

    'form' => [
        'name' => [
            'label' => 'Adı',
        ],
        'handle' => [
            'label' => 'Handle',
        ],
    ],

    'action' => [
        'delete' => [
            'notification' => [
                'error_protected' => 'İlişkilendirilmiş koleksiyonlar olduğundan bu koleksiyon grubu silinemez.',
            ],
        ],
    ],
];
