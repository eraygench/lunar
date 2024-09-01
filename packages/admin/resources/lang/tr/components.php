<?php

return [
    'tags' => [
        'notification' => [

            'updated' => 'Etiketler güncellendi',

        ],
    ],

    'activity-log' => [

        'input' => [

            'placeholder' => 'Bir yorum ekleyin',

        ],

        'action' => [

            'add-comment' => 'Yorum Ekle',

        ],

        'system' => 'Sistem',

        'partials' => [
            'orders' => [
                'order_created' => 'Sipariş Oluşturuldu',

                'status_change' => 'Durum güncellendi',

                'capture' => 'Sonu :last_four ile biten karttaki :amount ödemesi',

                'authorized' => 'Sonu :last_four ile biten kartta :amount yetkilendirmesi',

                'refund' => 'Sonu :last_four ile biten kartta :amount tutarının iadesi',

                'address' => ':type güncellendi',

                'billingAddress' => 'Fatura Adresi',

                'shippingAddress' => 'Teslimat Adresi',
            ],

            'update' => [
                'updated' => ':model güncellendi',
            ],

            'create' => [
                'created' => ':model oluşturuldu',
            ],

            'tags' => [
                'updated' => 'Etiketler güncellendi',
                'added' => 'Eklendi',
                'removed' => 'Silindi',
            ],
        ],

        'notification' => [
            'comment_added' => 'Yorum eklendi',
        ],

    ],

    'forms' => [
        'youtube' => [
            'helperText' => 'YouTube videosunun kimliğini girin. Örn. dQw4w9WgXcQ',
        ],
    ],

    'collection-tree-view' => [
        'actions' => [
            'move' => [
                'form' => [
                    'target_id' => [
                        'label' => 'Ana Koleksiyon',
                    ],
                ],
            ],
        ],
        'notifications' => [
            'collections-reordered' => [
                'success' => 'Koleksiyonlar yeniden sıralandı',
            ],
            'node-expanded' => [
                'danger' => 'Koleksiyonlar yüklenemedi',
            ],
            'delete' => [
                'danger' => 'Koleksiyon silinemedi',
            ],
        ],
    ],

    'product-options-list' => [
        'add-option' => [
            'label' => 'Seçenek Ekle',
        ],
        'delete-option' => [
            'label' => 'Seçenek Sil',
        ],
        'remove-shared-option' => [
            'label' => 'Paylaşılan Seçeneği Kaldır',
        ],
        'add-value' => [
            'label' => 'Başka Bir Değer Ekle',
        ],
        'name' => [
            'label' => 'Adı',
        ],
        'values' => [
            'label' => 'Değerler',
        ],
    ],
];
