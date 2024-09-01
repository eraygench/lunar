<?php

return [
    'plural_label' => 'İndirimler',
    'label' => 'İndirim',
    'form' => [
        'conditions' => [
            'heading' => 'Koşullar',
        ],
        'buy_x_get_y' => [
            'heading' => 'X Al Y Kazan',
        ],
        'amount_off' => [
            'heading' => 'İndirim Tutarı',
        ],
        'name' => [
            'label' => 'Adı',
        ],
        'handle' => [
            'label' => 'Handle',
        ],
        'starts_at' => [
            'label' => 'Başlangıç Tarihi',
        ],
        'ends_at' => [
            'label' => 'Bitiş Tarihi',
        ],
        'priority' => [
            'label' => 'Öncelik',
            'helper_text' => 'Önceliği yüksek olan indirimler ilk önce uygulanacaktır.',
            'options' => [
                'low' => [
                    'label' => 'Düşük',
                ],
                'medium' => [
                    'label' => 'Orta',
                ],
                'high' => [
                    'label' => 'Yüksek',
                ],
            ],
        ],
        'type' => [
            'label' => 'Tür',
            'options' => [
                'amount_off' => [
                    'label' => 'İndirim Tutarı',
                ],
                'buy_x_get_y' => [
                    'label' => 'X Al Y Kazan',
                ],
            ],
        ],
        'stop' => [
            'label' => 'Bundan sonraki diğer indirimlerin uygulanmasını durdurun',
        ],
        'coupon' => [
            'label' => 'Kupon',
            'helper_text' => 'İndirimin uygulanması için gereken kuponu girin, boş bırakılırsa otomatik olarak uygulanır.',
        ],
        'max_uses' => [
            'label' => 'Maksimum kullanım',
            'helper_text' => 'Sınırsız kullanım için boş bırakın.',
        ],
        'max_uses_per_user' => [
            'label' => 'Kullanıcı başına maksimum kullanım',
            'helper_text' => 'Sınırsız kullanım için boş bırakın.',
        ],
        'minimum_cart_amount' => [
            'label' => 'Minimum Sepet Tutarı',
        ],
        'fixed_value' => [
            'label' => 'Sabit Tutar',
        ],
        'percentage' => [
            'label' => 'Yüzdelik',
        ],
        'min_qty' => [
            'label' => 'Ürün Miktarı',
            'helper_text' => 'İndirimin uygulanması için kaç adet uygun ürün gerektiğini ayarlayın.',
        ],
        'reward_qty' => [
            'label' => 'Ücretsiz ürün sayısı',
            'helper_text' => 'Her bir üründen kaç adet indirimli.',
        ],
        'max_reward_qty' => [
            'label' => 'Maksimum ödül miktarı',
            'helper_text' => 'Kriterlerden bağımsız olarak indirim yapılabilecek maksimum ürün miktarı.',
        ],
        'automatic_rewards' => [
            'label' => 'Ödülleri otomatik olarak ekle',
            'helper_text' => 'Sepette bulunmayan ödül ürünlerini eklemek için açın.',
        ],
    ],
    'table' => [
        'name' => [
            'label' => 'Adı',
        ],
        'status' => [
            'label' => 'Durum',
            \Lunar\Models\Discount::ACTIVE => [
                'label' => 'Aktif',
            ],
            \Lunar\Models\Discount::PENDING => [
                'label' => 'Beklemede',
            ],
            \Lunar\Models\Discount::EXPIRED => [
                'label' => 'Süresi doldu',
            ],
            \Lunar\Models\Discount::SCHEDULED => [
                'label' => 'Planlandı',
            ],
        ],
        'type' => [
            'label' => 'Tür',
        ],
        'starts_at' => [
            'label' => 'Başlangıç Tarihi',
        ],
        'ends_at' => [
            'label' => 'Bitiş Tarihi',
        ],
    ],
    'empty_state' => [
        'label' => 'Henüz indirim oluşturulmadı',
        'description' => '',
    ],
    'pages' => [
        'edit' => [
            'label' => 'Temel Bilgiler',
        ],
        'availability' => [
            'label' => 'Uygunluk',
        ],
        'limitations' => [
            'label' => 'Sınırlamalar',
        ],
    ],
    'relationmanagers' => [
        'collections' => [
            'title' => 'Koleksiyonlar',
            'description' => 'Bu indirimin hangi koleksiyonlarla sınırlı olacağını seçin.',
            'actions' => [
                'attach' => [
                    'label' => 'Koleksiyon İlişkilendirin',
                ],
            ],
            'empty_state' => [
                'label' => 'Henüz koleksiyon ilişkilendirilmedi',
                'description' => '',
            ],
            'table' => [
                'name' => [
                    'label' => 'Adı',
                ],
                'type' => [
                    'label' => 'Tür',
                    'limitation' => [
                        'label' => 'Sınırlama',
                    ],
                    'exclusion' => [
                        'label' => 'Hariç Tutma',
                    ],
                ],
            ],
            'form' => [
                'type' => [
                    'label' => 'Tür',
                    'options' => [
                        'limitation' => [
                            'label' => 'Sınırlama',
                        ],
                        'exclusion' => [
                            'label' => 'Hariç Tutma',
                        ],
                    ],
                ],
            ],
        ],
        'brands' => [
            'title' => 'Markalar',
            'description' => 'Bu indirimin hangi markalarla sınırlı olacağını seçin.',
            'actions' => [
                'attach' => [
                    'label' => 'Marka İlişkilendirin',
                ],
            ],
            'empty_state' => [
                'label' => 'Henüz ürün ilişkilendirilmedi',
                'description' => '',
            ],
            'table' => [
                'name' => [
                    'label' => 'Adı',
                ],
                'type' => [
                    'label' => 'Tür',
                    'limitation' => [
                        'label' => 'Sınırlama',
                    ],
                    'exclusion' => [
                        'label' => 'Hariç Tutma',
                    ],
                ],
            ],
            'form' => [
                'type' => [
                    'label' => 'Tür',
                    'options' => [
                        'limitation' => [
                            'label' => 'Sınırlama',
                        ],
                        'exclusion' => [
                            'label' => 'Hariç Tutma',
                        ],
                    ],
                ],
            ],
        ],
        'products' => [
            'title' => 'Ürünler',
            'description' => 'Bu indirimin hangi ürünlerle sınırlı olacağını seçin.',
            'actions' => [
                'attach' => [
                    'label' => 'Ürün Ekle',
                ],
            ],
            'empty_state' => [
                'label' => 'Henüz ürün eklenmedi',
                'description' => '',
            ],
            'table' => [
                'name' => [
                    'label' => 'Adı',
                ],
                'type' => [
                    'label' => 'Tür',
                    'limitation' => [
                        'label' => 'Sınırlama',
                    ],
                    'exclusion' => [
                        'label' => 'Hariç Tutma',
                    ],
                ],
            ],
            'form' => [
                'type' => [
                    'options' => [
                        'limitation' => [
                            'label' => 'Sınırlama',
                        ],
                        'exclusion' => [
                            'label' => 'Hariç Tutma',
                        ],
                    ],
                ],
            ],
        ],
        'rewards' => [
            'title' => 'Ürün Ödülleri',
            'description' => 'Sepette bulunması ve yukarıdaki koşulların karşılanması durumunda hangi ürünlerin indirimli olacağını seçin.',
            'actions' => [
                'attach' => [
                    'label' => 'Ürün Ekle',
                ],
            ],
            'empty_state' => [
                'label' => 'Henüz ürün ödülü eklenmedi',
                'description' => '',
            ],
            'table' => [
                'name' => [
                    'label' => 'Adı',
                ],
                'type' => [
                    'label' => 'Tür',
                    'limitation' => [
                        'label' => 'Sınırlama',
                    ],
                    'exclusion' => [
                        'label' => 'Hariç Tutma',
                    ],
                ],
            ],
            'form' => [
                'type' => [
                    'options' => [
                        'limitation' => [
                            'label' => 'Sınırlama',
                        ],
                        'exclusion' => [
                            'label' => 'Hariç Tutma',
                        ],
                    ],
                ],
            ],
        ],
        'conditions' => [
            'title' => 'Ürün Koşulları',
            'description' => 'İndirimin geçerli olması için gereken ürünleri seçin.',
            'actions' => [
                'attach' => [
                    'label' => 'Ürün Ekle',
                ],
            ],
            'empty_state' => [
                'label' => 'Henüz ürün koşulu eklenmedi',
                'description' => '',
            ],
            'table' => [
                'name' => [
                    'label' => 'Adı',
                ],
                'type' => [
                    'label' => 'Tür',
                    'limitation' => [
                        'label' => 'Sınırlama',
                    ],
                    'exclusion' => [
                        'label' => 'Hariç Tutma',
                    ],
                ],
            ],
            'form' => [
                'type' => [
                    'options' => [
                        'limitation' => [
                            'label' => 'Sınırlama',
                        ],
                        'exclusion' => [
                            'label' => 'Hariç Tutma',
                        ],
                    ],
                ],
            ],
        ],
        'productvariants' => [
            'title' => 'Ürün Varyantları',
            'description' => 'Bu indirimin hangi ürün varyantlarıyla sınırlı olacağını seçin.',
            'actions' => [
                'attach' => [
                    'label' => 'Ürün Varyantı Ekle',
                ],
            ],
            'empty_state' => [
                'label' => 'Henüz ürün varyantı eklenmedi',
                'description' => '',
            ],
            'table' => [
                'name' => [
                    'label' => 'Adı',
                ],
                'sku' => [
                    'label' => 'SKU',
                ],
                'values' => [
                    'label' => 'Seçenek(ler)',
                ],
            ],
            'form' => [
                'type' => [
                    'options' => [
                        'limitation' => [
                            'label' => 'Sınırlama',
                        ],
                        'exclusion' => [
                            'label' => 'Hariç Tutma',
                        ],
                    ],
                ],
            ],
        ],
    ],
];
