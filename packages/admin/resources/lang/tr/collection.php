<?php

return [

    'label' => 'Koleksiyon',

    'plural_label' => 'Koleksiyonlar',

    'form' => [
        'name' => [
            'label' => 'Adı',
        ],
    ],

    'actions' => [
        'delete' => [
            'modal' => [
                'form' => [
                    'target_collection' => [
                        'label' => 'Hedef Koleksiyon',
                        'helper' => 'Bu koleksiyona ait çocukların, aktarılacağı koleksiyonu seçin.',
                    ],
                ],
            ],
        ],
    ],

    'pages' => [
        'children' => [
            'label' => 'Çocuk Koleksiyonları',
            'actions' => [
                'create_child' => [
                    'label' => 'Çocuk Koleksiyonu Oluştur',
                ],
            ],
            'empty_state' => [
                'label' => 'Henüz çocuk koleksiyon eklenmedi',
                'description' => '',
            ],
            'table' => [
                'children_count' => [
                    'label' => 'Çocuk Koleksiyon Sayısı',
                ],
                'name' => [
                    'label' => 'Adı',
                ],
            ],
        ],
        'edit' => [
            'label' => 'Temel Bilgiler',
        ],
        'products' => [
            'label' => 'Ürünler',
            'actions' => [
                'attach' => [
                    'label' => 'Ürün İlişkilendir',
                ],
            ],
            'empty_state' => [
                'label' => 'Henüz ürün ilişkilendirilmedi',
                'description' => '',
            ],
        ],
    ],

];
