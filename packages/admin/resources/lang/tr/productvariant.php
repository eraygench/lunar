<?php

return [
    'label' => 'Ürün Varyantı',
    'plural_label' => 'Ürün Varyantları',
    'pages' => [
        'edit' => [
            'title' => 'Temel Bilgiler',
        ],
        'media' => [
            'title' => 'Medya',
            'form' => [
                'no_selection' => [
                    'label' => 'Şu anda bu varyant için seçilmiş bir görseliniz yok.',
                ],
                'no_media_available' => [
                    'label' => 'Bu üründe şu anda herhangi bir medya mevcut değil.',
                ],
                'images' => [
                    'label' => 'Birincil Görsel',
                    'helper_text' => 'Bu varyantı temsil eden ürün görselini seçin.',
                ],
            ],
        ],
        'identifiers' => [
            'title' => 'Tanımlayıcılar',
        ],
        'inventory' => [
            'title' => 'Envanter',
        ],
        'shipping' => [
            'title' => 'Kargo',
        ],
    ],
    'form' => [
        'sku' => [
            'label' => 'SKU',
        ],
        'gtin' => [
            'label' => 'Global Ticari Ürün Numarası (GTIN)',
        ],
        'mpn' => [
            'label' => 'Üretici Parça Numarası (MPN)',
        ],
        'ean' => [
            'label' => 'UPC/EAN',
        ],
        'stock' => [
            'label' => 'Stokta',
        ],
        'backorder' => [
            'label' => 'Tedarikte',
        ],
        'purchasable' => [
            'label' => 'Satın Alınabilirlik',
            'options' => [
                'always' => 'Her zaman',
                'in_stock' => 'Stokta',
                'in_stock_or_on_backorder' => 'Stokta veya Tedarikte',
            ],
        ],
        'unit_quantity' => [
            'label' => 'Birim Miktarı',
            'helper_text' => 'Bir birim kaç ayrı üründen oluşur.',
        ],
        'min_quantity' => [
            'label' => 'Minimum Miktar',
            'helper_text' => 'Bir ürün varyantının tek seferde satın alınabilecek en düşük miktarı.',
        ],
        'quantity_increment' => [
            'label' => 'Miktar Artışı',
            'helper_text' => 'Ürün varyantı bu miktarın katları şeklinde satın alınmalıdır.',
        ],
        'tax_class_id' => [
            'label' => 'Vergi Sınıfı',
        ],
        'shippable' => [
            'label' => 'Sevk edilebilir',
        ],
        'length_value' => [
            'label' => 'Uzunluk',
        ],
        'length_unit' => [
            'label' => 'Uzunluk Birimi',
        ],
        'width_value' => [
            'label' => 'Genişlik',
        ],
        'width_unit' => [
            'label' => 'Genişlik Birimi',
        ],
        'height_value' => [
            'label' => 'Yükseklik',
        ],
        'height_unit' => [
            'label' => 'Yükseklik Birimi',
        ],
        'weight_value' => [
            'label' => 'Ağırlık',
        ],
        'weight_unit' => [
            'label' => 'Ağırlık Birimi',
        ],
    ],
];
