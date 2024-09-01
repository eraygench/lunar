<?php

return [

    'label' => 'Ürün Türü',

    'plural_label' => 'Ürün Türleri',

    'table' => [
        'name' => [
            'label' => 'Adı',
        ],
        'products_count' => [
            'label' => 'Ürün sayısı',
        ],
        'product_attributes_count' => [
            'label' => 'Ürün Özel Alanları',
        ],
        'variant_attributes_count' => [
            'label' => 'Varyant Özel Alanları',
        ],
    ],

    'empty_state' => [
        'label' => 'Henüz ürün türü oluşturulmadı',
        'description' => '',
    ],

    'tabs' => [
        'product_attributes' => [
            'label' => 'Ürün Özel Alanları',
        ],
        'variant_attributes' => [
            'label' => 'Varyant Özel Alanları',
        ],
    ],

    'form' => [
        'name' => [
            'label' => 'Adı',
        ],
    ],

    'attributes' => [
        'no_groups' => 'Kullanılabilir özel alan grubu yok.',
        'no_attributes' => 'Kullanılabilir özel alan yok.',
    ],

    'action' => [
        'delete' => [
            'notification' => [
                'error_protected' => 'İlişkili ürünler olduğundan bu ürün türü silinemez.',
            ],
        ],
    ],

];
