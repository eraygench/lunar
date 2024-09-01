<?php

return [

    'label' => 'Ürün Seçeneği',

    'plural_label' => 'Ürün Seçenekleri',

    'table' => [
        'name' => [
            'label' => 'Adı',
        ],
        'label' => [
            'label' => 'Etiket',
        ],
        'handle' => [
            'label' => 'Handle',
        ],
        'shared' => [
            'label' => 'Ortak',
        ],
    ],

    'empty_state' => [
        'label' => 'Henüz ürün seçeneği oluşturulmadı',
        'description' => '',
    ],

    'form' => [
        'name' => [
            'label' => 'Adı',
        ],
        'label' => [
            'label' => 'Etiket',
        ],
        'handle' => [
            'label' => 'Handle',
        ],
    ],

    'widgets' => [
        'product-options' => [
            'notifications' => [
                'save-variants' => [
                    'success' => [
                        'title' => 'Ürün Varyantları Kaydedildi',
                    ],
                ],
            ],
            'actions' => [
                'cancel' => [
                    'label' => 'İptal',
                ],
                'save-variants' => [
                    'label' => 'Varyantları Kaydet',
                ],
                'save-options' => [
                    'label' => 'Seçenekleri Kaydet',
                ],
                'add-shared-option' => [
                    'label' => 'Ortak Seçenek Ekle',
                    'modal' => [
                        'heading' => 'Ortak Seçenek Ekle',
                    ],
                    'form' => [
                        'product_option' => [
                            'label' => 'Ürün Seçeneği',
                        ],
                        'no_shared_components' => [
                            'label' => 'Ortak seçenek mevcut değil.',
                        ],
                    ],
                ],
                'add-restricted-option' => [
                    'label' => 'Seçenek Ekle',
                ],
            ],
            'options-list' => [
                'empty' => [
                    'heading' => 'Yapılandırılmış ürün seçeneği yok',
                    'description' => 'Bazı varyantlar oluşturmaya başlamak için ortak veya kısıtlı bir ürün seçeneği ekleyin.',
                ],
            ],
            'options-table' => [
                'title' => 'Ürün Seçenekleri',
                'configure-options' => [
                    'label' => 'Seçenekleri Yapılandır',
                ],
                'table' => [
                    'option' => [
                        'label' => 'Seçenek',
                    ],
                    'values' => [
                        'label' => 'Değerler',
                    ],
                ],
            ],
            'variants-table' => [
                'title' => 'Ürün Varyantları',
                'actions' => [
                    'create' => [
                        'label' => 'Varyant Oluştur',
                    ],
                    'edit' => [
                        'label' => 'Düzenle',
                    ],
                    'delete' => [
                        'label' => 'Sil',
                    ],
                ],
                'empty' => [
                    'heading' => 'Hiçbir Varyant Yapılandırılmadı',
                ],
                'table' => [
                    'new' => [
                        'label' => 'YENİ',
                    ],
                    'option' => [
                        'label' => 'Seçenek',
                    ],
                    'sku' => [
                        'label' => 'SKU',
                    ],
                    'price' => [
                        'label' => 'Fiyat',
                    ],
                    'stock' => [
                        'label' => 'Stok',
                    ],
                ],
            ],
        ],
    ],

];
