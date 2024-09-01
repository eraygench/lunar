<?php

return [
    'collections' => [
        'create_root' => [
            'label' => 'Kök Koleksiyonu Oluştur',
        ],
        'make_root' => [
            'label' => 'Kök Koleksiyonu Yap',
        ],
        'create_child' => [
            'label' => 'Çocuk Koleksiyonu Oluştur',
        ],
        'move' => [
            'label' => 'Koleksiyonu Taşı',
        ],
        'delete' => [
            'label' => 'Sil',
        ],
    ],
    'orders' => [
        'update_status' => [
            'label' => 'Durumu Güncelle',
            'wizard' => [
                'step_one' => [
                    'label' => 'Durum',
                ],
                'step_two' => [
                    'label' => 'Posta Göndericileri ve Bildirimler',
                    'no_mailers' => 'Bu durum için kullanılabilir posta gönderici bulunmamaktadır.',
                ],
                'step_three' => [
                    'label' => 'Önizle ve Kaydet',
                    'no_mailers' => 'Önizleme için hiçbir posta gönderici seçilmedi.',
                ],
            ],
            'notification' => [
                'label' => 'Sipariş durumu güncellendi',
            ],
            'billing_email' => [
                'label' => 'Fatura E-posta Adresi',
            ],
            'shipping_email' => [
                'label' => 'Teslimat E-posta Adresi',
            ],
        ],

    ],
];
