<?php

return [
    'shipping_methods' => [
        'customer_groups' => [
            'description' => 'Kullanılabilirliğini belirlemek için müşteri gruplarını bu teslimat yöntemiyle ilişkilendirin.',
        ],
    ],
    'shipping_rates' => [
        'title' => 'Kargo Ücreti',
        'title_plural' => 'Kargo Ücretleri',
        'actions' => [
            'create' => [
                'label' => 'Kargo Ücreti Oluştur',
            ],
        ],
        'empty_state' => [
            'label' => 'Henüz kargo ücreti eklenmedi',
            'description' => '',
        ],
        'notices' => [
            'prices_incl_tax' => 'Tüm fiyatlara vergi dahil olup minimum harcama hesaplanırken dikkate alınacaktır.',
            'prices_excl_tax' => 'Tüm fiyatlara vergi dahil değildir, minimum harcama sepet ara toplamına bağlı olacaktır.',
        ],
        'form' => [
            'shipping_method_id' => [
                'label' => 'Teslimat Yöntemi',
            ],
            'price' => [
                'label' => 'Fiyat',
            ],
            'prices' => [
                'label' => 'Fiyat İndirimleri',
                'repeater' => [
                    'customer_group_id' => [
                        'label' => 'Müşteri Grubu',
                        'placeholder' => 'Herhangi',
                    ],
                    'currency_id' => [
                        'label' => 'Para Birimi',
                    ],
                    'min_quantity' => [
                        'label' => 'Minimum Harcama',
                    ],
                    'price' => [
                        'label' => 'Fiyat',
                    ],
                ],
            ],
        ],
        'table' => [
            'shipping_method' => [
                'label' => 'Teslimat Yöntemi',
            ],
            'price' => [
                'label' => 'Fiyat',
            ],
            'price_breaks_count' => [
                'label' => 'Fiyat İndirimleri',
            ],
        ],
    ],
    'exclusions' => [
        'title' => 'Teslimat İstisna',
        'title_plural' => 'Teslimat İstisnaları',
        'form' => [
            'purchasable' => [
                'label' => 'Ürün',
            ],
        ],
        'empty_state' => [
            'label' => 'Henüz teslimat istisnası eklenmedi',
            'description' => '',
        ],
    ],
    'exclusionlists' => [
        'title' => 'Teslimat İstisna Listesi',
        'title_plural' => 'Teslimat İstisna Listeleri',
        'form' => [
            'purchasable' => [
                'label' => 'Ürün',
            ],
        ],
        'empty_state' => [
            'label' => 'Henüz teslimat istisna listesi eklenmedi',
            'description' => '',
        ],
        'actions' => [
            'attach' => [
                'label' => 'Teslimat İstisna Listesi Ekle',
            ],
            'detach' => [
                'label' => 'Ayır',
            ],
        ],
    ],
];
