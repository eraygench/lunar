<?php

return [
    'dashboard' => [
        'orders' => [
            'order_stats_overview' => [
                'stat_one' => [
                    'label' => 'Bugünkü siparişler',
                    'increase' => 'Dünkü :count\'a göre :percentage% artış',
                    'decrease' => 'Dünkü :count\'a göre :percentage% düşüş',
                    'neutral' => 'Düne göre bir değişiklik yok',
                ],
                'stat_two' => [
                    'label' => 'Son 7 gün içindeki siparişler',
                    'increase' => 'Geçen dönemdeki :count\'a göre :percentage% artış',
                    'decrease' => 'Geçen dönemdeki :count\'a göre :percentage% düşüş',
                    'neutral' => 'Geçen döneme göre değişiklik yok',
                ],
                'stat_three' => [
                    'label' => 'Son 30 gün içindeki siparişler',
                    'increase' => 'Geçen dönemdeki :count\'a göre :percentage% artış',
                    'decrease' => 'Geçen dönemdeki :count\'a göre :percentage% düşüş',
                    'neutral' => 'Geçen döneme göre değişiklik yok',
                ],
                'stat_four' => [
                    'label' => 'Bugünkü satışlar',
                    'increase' => 'Dünkü :total\'e göre :percentage% artış',
                    'decrease' => 'Dünkü :total\'e göre :percentage% düşüş',
                    'neutral' => 'Düne göre bir değişiklik yok',
                ],
                'stat_five' => [
                    'label' => 'Son 7 gün içindeki satışlar',
                    'increase' => 'Geçen dönemdeki :total\'a göre :percentage% artış',
                    'decrease' => 'Geçen dönemdeki :total\'a göre :percentage% düşüş',
                    'neutral' => 'Geçen döneme göre değişiklik yok',
                ],
                'stat_six' => [
                    'label' => 'Son 30 gün içindeki satışlar',
                    'increase' => 'Geçen dönemdeki :total\'a göre :percentage% artış',
                    'decrease' => 'Geçen dönemdeki :total\'a göre :percentage% düşüş',
                    'neutral' => 'Geçen döneme göre değişiklik yok',
                ],
            ],
            'order_totals_chart' => [
                'heading' => 'Geçen yıla ait sipariş toplamları',
                'series_one' => [
                    'label' => 'Bu Dönem',
                ],
                'series_two' => [
                    'label' => 'Önceki Dönem',
                ],
                'yaxis' => [
                    'label' => 'Ciro :currency',
                ],
            ],
            'order_sales_chart' => [
                'heading' => 'Sipariş / Satış Raporu',
                'series_one' => [
                    'label' => 'Siparişler',
                ],
                'series_two' => [
                    'label' => 'Hasılat',
                ],
                'yaxis' => [
                    'series_one' => [
                        'label' => '# Siparişler',
                    ],
                    'series_two' => [
                        'label' => 'Toplam Değer',
                    ],
                ],
            ],
            'average_order_value' => [
                'heading' => 'Ortalama Sipariş Değeri',
            ],
            'new_returning_customers' => [
                'heading' => 'Yeni ve Geri Dönen Müşteriler',
                'series_one' => [
                    'label' => 'Yeni Müşteriler',
                ],
                'series_two' => [
                    'label' => 'Geri Dönen Müşteriler',
                ],
            ],
            'popular_products' => [
                'heading' => 'Çok satanlar (son 12 ay)',
                'description' => 'Bu rakamlar, sipariş edilen miktara değil, bir ürünün siparişte görünme sayısına dayanır.',
                'empty_state' => [
                    'label' => 'Sipariş bulunamadı',
                    'description' => '',
                ],
                'table' => [
                    'description' => [
                        'label' => 'Açıklama',
                    ],
                    'identifier' => [
                        'label' => 'SKU',
                    ],
                    'quantity' => [
                        'label' => 'Miktar',
                    ],
                    'sub_total' => [
                        'label' => 'Ara Toplam',
                    ],
                ],
            ],
            'latest_orders' => [
                'heading' => 'Son siparişler',
                'empty_state' => [
                    'label' => 'Sipariş bulunamadı',
                    'description' => '',
                ],
            ],
        ],
    ],
    'customer' => [
        'stats_overview' => [
            'total_orders' => [
                'label' => 'Toplam sipariş',
            ],
            'avg_spend' => [
                'label' => 'Ort. Harcama',
            ],
            'total_spend' => [
                'label' => 'Toplam Harcama',
            ],
        ],
    ],
    'variant_switcher' => [
        'label' => 'Varyant Değiştir',
        'table' => [
            'sku' => [
                'label' => 'SKU',
            ],
            'values' => [
                'label' => 'Değerler',
            ],
        ],
    ],
];
