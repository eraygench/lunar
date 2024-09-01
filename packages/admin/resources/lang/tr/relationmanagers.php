<?php

return [
    'customer_groups' => [
        'title' => 'Müşteri Grubu',
        'title_plural' => 'Müşteri Grupları',
        'actions' => [
            'attach' => [
                'label' => 'Müşteri Grubu İlişkilendir',
            ],
        ],
        'form' => [
            'name' => [
                'label' => 'Adı',
            ],
            'enabled' => [
                'label' => 'Etkin',
            ],
            'starts_at' => [
                'label' => 'Başlangıç Tarihi',
            ],
            'ends_at' => [
                'label' => 'Bitiş Tarihi',
            ],
            'visible' => [
                'label' => 'Görünür',
            ],
            'purchasable' => [
                'label' => 'Satın Alınabilir',
            ],
        ],
        'table' => [
            'description' => 'Kullanılabilirliğini belirlemek için müşteri gruplarını ilişkilendirin.',
            'name' => [
                'label' => 'Adı',
            ],
            'enabled' => [
                'label' => 'Etkin',
            ],
            'starts_at' => [
                'label' => 'Başlangıç Tarihi',
            ],
            'ends_at' => [
                'label' => 'Bitiş Tarihi',
            ],
            'visible' => [
                'label' => 'Görünür',
            ],
            'purchasable' => [
                'label' => 'Satın Alınabilir',
            ],
        ],
    ],
    'channels' => [
        'title' => 'Kanal',
        'title_plural' => 'Kanallar',
        'actions' => [
            'attach' => [
                'label' => 'Başka bir Kanal planla',
            ],
        ],
        'form' => [
            'enabled' => [
                'label' => 'Etkin',
                'helper_text_false' => 'Bu kanal, bir başlangıç tarihi mevcut olsa bile etkinleştirilmeyecektir.',
            ],
            'starts_at' => [
                'label' => 'Başlangıç Tarihi',
                'helper_text' => 'Herhangi bir tarihten itibaren kullanılabilir olması için boş bırakın.',
            ],
            'ends_at' => [
                'label' => 'Bitiş Tarihi',
                'helper_text' => 'Süresiz olarak kullanılabilmesi için boş bırakın.',
            ],
        ],
        'table' => [
            'description' => 'Hangi kanalların etkin olduğunu belirleyin ve kullanılabilirliği planlayın.',
            'name' => [
                'label' => 'Adı',
            ],
            'enabled' => [
                'label' => 'Etkin',
            ],
            'starts_at' => [
                'label' => 'Başlangıç Tarihi',
            ],
            'ends_at' => [
                'label' => 'Bitiş Tarihi',
            ],
        ],
    ],
    'medias' => [
        'title' => 'Medya',
        'title_plural' => 'Medya',
        'actions' => [
            'create' => [
                'label' => 'Medya Oluştur',
            ],
            'view' => [
                'label' => 'Görüntüle',
            ],
        ],
        'form' => [
            'name' => [
                'label' => 'Adı',
            ],
            'media' => [
                'label' => 'Görsel',
            ],
            'primary' => [
                'label' => 'Birincil',
            ],
        ],
        'table' => [
            'empty_state' => [
                'label' => 'Henüz medya oluşturulmadı',
                'description' => '',
            ],
            'image' => [
                'label' => 'Görsel',
            ],
            'file' => [
                'label' => 'Dosya',
            ],
            'name' => [
                'label' => 'Adı',
            ],
            'primary' => [
                'label' => 'Birincil',
            ],
        ],
    ],
    'urls' => [
        'title' => 'URL',
        'title_plural' => 'URL\'ler',
        'actions' => [
            'create' => [
                'label' => 'URL Oluştur',
            ],
        ],
        'filters' => [
            'language_id' => [
                'label' => 'Dil',
            ],
        ],
        'form' => [
            'slug' => [
                'label' => 'Slug',
            ],
            'default' => [
                'label' => 'Varsayılan',
            ],
            'language' => [
                'label' => 'Dil',
            ],
        ],
        'table' => [
            'empty_state' => [
                'label' => 'Henüz URL oluşturulmadı',
                'description' => 'Başlamak için bir URL oluşturun.',
            ],
            'slug' => [
                'label' => 'Slug',
            ],
            'default' => [
                'label' => 'Varsayılan',
            ],
            'language' => [
                'label' => 'Dil',
            ],
        ],
    ],
    'customer_group_pricing' => [
        'title' => 'Müşteri Grubu Fiyatlandırması',
        'title_plural' => 'Müşteri Grubu Fiyatlandırması',
        'table' => [
            'heading' => 'Müşteri Grubu Fiyatlandırması',
            'description' => 'Ürün fiyatını belirlemek için fiyatı müşteri gruplarıyla ilişkilendirin.',
            'empty_state' => [
                'label' => 'Müşteri grubu fiyatlandırması bulunmamaktadır.',
                'description' => 'Başlamak için bir müşteri grubu fiyatı oluşturun.',
            ],
            'actions' => [
                'create' => [
                    'label' => 'Müşteri Grubu Fiyatı Ekle',
                    'modal' => [
                        'heading' => 'Müşteri Grubu Fiyatı Oluştur',
                    ],
                ],
            ],
        ],
    ],
    'pricing' => [
        'title' => 'Fiyatlandırma',
        'title_plural' => 'Fiyatlandırma',
        'tab_name' => 'Fiyat İndirimleri',
        'table' => [
            'heading' => 'Fiyat İndirimleri',
            'description' => 'Müşteri büyük miktarda satın alım yaptığında fiyatı düşürün.',
            'empty_state' => [
                'label' => 'Herhangi bir fiyat indirimi mevcut değildir.',
            ],
            'actions' => [
                'create' => [
                    'label' => 'Fiyat İndirimi Ekle',
                ],
            ],
            'price' => [
                'label' => 'Fiyat',
            ],
            'customer_group' => [
                'label' => 'Müşteri Grubu',
                'placeholder' => 'Tüm Müşteri Grupları',
            ],
            'min_quantity' => [
                'label' => 'Minimum Miktar',
            ],
            'currency' => [
                'label' => 'Para Birimi',
            ],
        ],
        'form' => [
            'price' => [
                'label' => 'Fiyat',
                'helper_text' => 'İndirimlerden önceki satın alma fiyatı.',
            ],
            'customer_group_id' => [
                'label' => 'Müşteri Grubu',
                'placeholder' => 'Tüm Müşteri Grupları',
                'helper_text' => 'Bu fiyatın hangi müşteri grubuna uygulanacağını seçin.',
            ],
            'min_quantity' => [
                'label' => 'Minimum Miktar',
                'helper_text' => 'Bu fiyatın geçerli olacağı minimum miktarı seçin.',
                'validation' => [
                    'unique' => 'Müşteri Grubu ve Minimum Miktar benzersiz olmalıdır.',
                ],
            ],
            'currency_id' => [
                'label' => 'Para Birimi',
                'helper_text' => 'Bu fiyat için para birimini seçin.',
            ],
            'compare_price' => [
                'label' => 'Karşılaştırma Fiyatı',
                'helper_text' => 'Satın alma fiyatıyla karşılaştırma yapabilmek için orijinal fiyat veya tavsiye edilen perakende satış fiyatı.',
            ],
            'basePrices' => [
                'title' => 'Fiyatlar',
                'form' => [
                    'price' => [
                        'label' => 'Fiyat',
                        'helper_text' => 'İndirimlerden önceki satın alma fiyatı.',
                    ],
                    'compare_price' => [
                        'label' => 'Karşılaştırma Fiyatı',
                        'helper_text' => 'Satın alma fiyatıyla karşılaştırma yapabilmek için orijinal fiyat veya tavsiye edilen perakende satış fiyatı.',
                    ],
                ],
                'tooltip' => 'Döviz kurlarına göre otomatik olarak oluşturulur.',
            ],
        ],
    ],
    'tax_rate_amounts' => [
        'title' => 'Miktar',
        'title_plural' => 'Miktarlar',
        'table' => [
            'heading' => 'Miktarlar',
            'description' => '',
            'empty_state' => [
                'label' => 'Henüz miktar oluşturulmadı',
                'description' => '',
            ],
            'percentage' => [
                'label' => 'Vergi Oranı',
            ],
            'tax_class' => [
                'label' => 'Vergi Sınıfı',
            ],
        ],
    ],
];
