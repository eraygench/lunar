<?php

return [

    'label' => 'Ürün',

    'plural_label' => 'Ürünler',

    'status' => [
        'unpublished' => [
            'content' => 'Şu anda taslak durumunda olan bu ürün, tüm kanallarda ve müşteri gruplarında gizlidir.',
        ],
        'availability' => [
            'customer_groups' => 'Bu ürün şu anda tüm müşteri grupları için mevcut değildir.',
            'channels' => 'Bu ürün şu anda tüm kanallar için mevcut değildir.',
        ],
    ],

    'tabs' => [
        'all' => 'Hepsi',
        'draft' => 'Taslak',
        'published' => 'Yayında',
    ],

    'table' => [
        'status' => [
            'label' => 'Durum',
            'states' => [
                'deleted' => 'Silindi',
                'draft' => 'Taslak',
                'published' => 'Yayında',
            ],
        ],
        'name' => [
            'label' => 'Adı',
        ],
        'brand' => [
            'label' => 'Marka',
        ],
        'sku' => [
            'label' => 'SKU',
        ],
        'stock' => [
            'label' => 'Stok',
        ],
        'producttype' => [
            'label' => 'Ürün Türü',
        ],
    ],

    'empty_state' => [
        'label' => 'Henüz ürün oluşturulmadı',
        'description' => '',
    ],

    'actions' => [
        'edit_status' => [
            'label' => 'Durumu Güncelle',
            'heading' => 'Durumu Güncelle',
        ],
    ],

    'form' => [
        'name' => [
            'label' => 'Adı',
        ],
        'brand' => [
            'label' => 'Marka',
        ],
        'sku' => [
            'label' => 'SKU',
        ],
        'producttype' => [
            'label' => 'Ürün Türü',
        ],
        'status' => [
            'label' => 'Durum',
            'options' => [
                'published' => [
                    'label' => 'Yayında',
                    'description' => 'Bu ürün, etkin olan tüm müşteri grupları ve kanallarda satışa sunulacak',
                ],
                'draft' => [
                    'label' => 'Taslak',
                    'description' => 'Bu ürün tüm kanallarda ve müşteri gruplarında gizlenecektir',
                ],
            ],
        ],
        'tags' => [
            'label' => 'Etiketler',
        ],
        'collections' => [
            'label' => 'Koleksiyonlar',
        ],
    ],

    'pages' => [
        'availability' => [
            'label' => 'Kullanılabilirlik',
        ],
        'edit' => [
            'title' => 'Basic Information',
        ],
        'identifiers' => [
            'label' => 'Ürün Tanımlayıcıları',
        ],
        'inventory' => [
            'label' => 'Envanter',
        ],
        'pricing' => [
            'form' => [
                'tax_class_id' => [
                    'label' => 'Vergi Sınıfı',
                ],
                'tax_ref' => [
                    'label' => 'Vergi Referansı',
                    'helper_text' => 'Üçüncü taraf sistemlerle entegrasyon için isteğe bağlıdır.',
                ],
            ],
        ],
        'shipping' => [
            'label' => 'Kargo',
        ],
        'variants' => [
            'label' => 'Varyantlar',
        ],
        'collections' => [
            'label' => 'Koleksiyon',
            'plural_label' => 'Koleksiyonlar',
            'actions' => [
                'attach' => [
                    'label' => 'Bir koleksiyonu ilişkilendir',
                    'modal' => [
                        'heading' => 'Koleksiyon İlişkilendir',
                    ],
                ],
                'detach' => [
                    'label' => 'Ayır',
                    'modal' => [
                        'heading' => 'Koleksiyon Ayır',
                    ],
                ],
            ],
            'empty_state' => [
                'label' => 'Henüz koleksiyon ilişkilendirilmedi',
                'description' => '',
            ],
        ],
        'associations' => [
            'label' => 'Ürün İlişkilendirmesi',
            'plural_label' => 'Ürün İlişkilendirmeleri',
            'actions' => [
                'create' => [
                    'label' => 'Ürün İlişkilendirmesi Oluştur',
                    'modal' => [
                        'heading' => 'Ürün İlişkilendirmesi Oluştur',
                    ],
                ],
                'delete' => [
                    'modal' => [
                        'heading' => 'Ürün İlişkilendirmesini Sil',
                    ],
                ],
            ],
            'empty_state' => [
                'label' => 'Henüz ürün ilişkilendirilmedi',
                'description' => 'Başlamak için bir ürün ilişkilendirin.',
            ],
            'form' => [
                'type' => [
                    'label' => 'Tür',
                    'options' => [
                        'alternate' => 'Alternatif',
                        'cross-sell' => 'Çapraz Satış',
                        'up-sell' => 'Üst Satış',
                    ],
                ],
            ],
        ],
    ],

];
