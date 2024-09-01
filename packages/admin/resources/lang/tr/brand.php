<?php

return [

    'label' => 'Marka',

    'plural_label' => 'Markalar',

    'table' => [
        'name' => [
            'label' => 'Adı',
        ],
        'products_count' => [
            'label' => 'Ürün Sayısı',
        ],
    ],

    'empty_state' => [
        'label' => 'Henüz marka oluşturulmadı',
        'description' => '',
    ],

    'form' => [
        'name' => [
            'label' => 'Adı',
        ],
    ],

    'action' => [
        'delete' => [
            'notification' => [
                'error_protected' => 'İlişkili ürünler olduğu için bu marka silinemez.',
            ],
        ],
    ],
    'pages' => [
        'edit' => [
            'label' => 'Temel Bilgiler',
        ],
        'products' => [
            'label' => 'Ürünler',
            'actions' => [
                'attach' => [
                    'label' => 'Bir ürünü ilişkilendirin',
                    'form' => [
                        'record_id' => [
                            'label' => 'Ürün',
                        ],
                    ],
                    'notification' => [
                        'success' => 'Ürün markayla ilişkilendirildi',
                    ],
                ],
                'detach' => [
                    'notification' => [
                        'success' => 'Ürün markadan ayrıldı',
                    ],
                ],
            ],
            'empty_state' => [
                'label' => 'Henüz ürün ilişkilendirilmedi',
                'description' => '',
            ],
        ],
        'collections' => [
            'label' => 'Koleksiyonlar',
            'table' => [
                'header_actions' => [
                    'attach' => [
                        'record_select' => [
                            'placeholder' => 'Bir koleksiyon seçin',
                        ],
                    ],
                ],
            ],
            'empty_state' => [
                'label' => 'Henüz koleksiyon ilişkilendirilmedi',
                'description' => '',
            ],
        ],
    ],

];
