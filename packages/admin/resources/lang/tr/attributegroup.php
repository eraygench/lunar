<?php

return [

    'label' => 'Özel Alan Grubu',

    'plural_label' => 'Özel Alan Grupları',

    'table' => [
        'attributable_type' => [
            'label' => 'Tür',
        ],
        'name' => [
            'label' => 'Adı',
        ],
        'handle' => [
            'label' => 'Handle',
        ],
        'position' => [
            'label' => 'Sıra',
        ],
    ],

    'empty_state' => [
        'label' => 'Henüz özel alan grubu oluşturulmadı',
        'description' => '',
    ],

    'form' => [
        'attributable_type' => [
            'label' => 'Tür',
        ],
        'name' => [
            'label' => 'Adı',
        ],
        'handle' => [
            'label' => 'Handle',
        ],
        'position' => [
            'label' => 'Sıra',
        ],
    ],

    'attributable_types' => [
        'brand' => 'Marka',
        'collection' => 'Koleksiyon',
        'customer' => 'Müşteri',
        'customer_group' => 'Müşteri Grubu',
        'product' => 'Ürün',
        'product_variant' => 'Ürün Varyantı',
    ],

    'action' => [
        'delete' => [
            'notification' => [
                'error_protected' => 'Bu özel alan grubu, ilişkilendirilmiş özel alanı olduğu için silinemez.',
            ],
        ],
    ],
];
