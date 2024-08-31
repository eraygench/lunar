<?php

return [
    'label_plural' => 'Teslimat Yöntemleri',
    'label' => 'Teslimat Yöntemi',
    'form' => [
        'name' => [
            'label' => 'Adı',
        ],
        'description' => [
            'label' => 'Açıklama',
        ],
        'code' => [
            'label' => 'Kodu',
        ],
        'cutoff' => [
            'label' => 'Son Teslim Saati',
        ],
        'charge_by' => [
            'label' => 'Ücretlendirme Yöntemi',
            'options' => [
                'cart_total' => 'Sepet Toplamı',
                'weight' => 'Ağırlık',
            ],
        ],
        'driver' => [
            'label' => 'Tür',
            'options' => [
                'ship-by' => 'Standard',
                'collection' => 'Koleksiyon',
            ],
        ],
        'stock_available' => [
            'label' => 'Sepetteki tüm ürünlerin stokları mevcut olmalıdır',
        ],
    ],
    'table' => [
        'name' => [
            'label' => 'Adı',
        ],
        'code' => [
            'label' => 'Kodu',
        ],
        'driver' => [
            'label' => 'Tür',
            'options' => [
                'ship-by' => 'Standard',
                'collection' => 'Koleksiyon',
            ],
        ],
    ],
    'empty_state' => [
        'label' => 'Henüz teslimat yöntemi oluşturulmadı',
        'description' => '',
    ],
    'pages' => [
        'edit' => [
            'label' => 'Temel Bilgiler',
        ],
        'availability' => [
            'label' => 'Kullanılabilirlik',
            'customer_groups' => 'Bu teslimat yöntemi şu anda tüm müşteri gruplarında kullanılamamaktadır.',
        ],
    ],
];
