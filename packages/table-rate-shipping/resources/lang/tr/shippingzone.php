<?php

return [
    'label' => 'Teslimat Bölgesi',
    'label_plural' => 'Teslimat Bölgeleri',
    'form' => [
        'unrestricted' => [
            'content' => 'Bu teslimat bölgesinde herhangi bir kısıtlama yoktur ve tüm müşterilerimize ödeme sırasında sunulacaktır.',
        ],
        'name' => [
            'label' => 'Adı',
        ],
        'type' => [
            'label' => 'Tür',
            'options' => [
                'unrestricted' => 'Sınırlandırılmamış',
                'countries' => 'Ülkelerle Sınırla',
                'states' => 'Eyaletlerle / İllerle Sınırla',
                'postcodes' => 'Posta Kodlarıyla Sınırla',
            ],
        ],
        'country' => [
            'label' => 'Ülke',
        ],
        'states' => [
            'label' => 'Eyaletler',
        ],
        'countries' => [
            'label' => 'Ülkeler',
        ],
        'postcodes' => [
            'label' => 'Posta Kodları',
            'helper' => 'Her posta kodunu yeni bir satırda listeleyin. NW* gibi joker karakterleri destekler',
        ],
    ],
    'table' => [
        'name' => [
            'label' => 'Adı',
        ],
        'type' => [
            'label' => 'Tür',
            'options' => [
                'unrestricted' => 'Sınırlandırılmamış',
                'countries' => 'Ülkelerle Sınırla',
                'states' => 'Eyaletlerle / İllerle Sınırla',
                'postcodes' => 'Posta Kodlarıyla Sınırla',
            ],
        ],
    ],
    'empty_state' => [
        'label' => 'Henüz teslimat bölgesi oluşturulmadı',
        'description' => '',
    ],
    'pages' => [
        'edit' => [
            'label' => 'Temel Bilgiler',
        ],
    ],
];
