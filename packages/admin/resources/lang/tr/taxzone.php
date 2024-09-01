<?php

return [

    'label' => 'Vergi Bölgesi',

    'plural_label' => 'Vergi Bölgeleri',

    'table' => [
        'name' => [
            'label' => 'Adı',
        ],
        'zone_type' => [
            'label' => 'Bölge Türü',
            'options' => [
                'country' => 'Ülkelerle Sınırla',
                'states' => 'Eyaletlerle Sınırla',
                'postcodes' => 'Posta Kodlarıyla Sınırla',
            ],
        ],
        'active' => [
            'label' => 'Aktif',
        ],
        'default' => [
            'label' => 'Varsayılan',
        ],
    ],

    'empty_state' => [
        'label' => 'Henüz vergi bölgesi oluşturulmadı',
        'description' => '',
    ],

    'form' => [
        'name' => [
            'label' => 'Adı',
        ],
        'zone_type' => [
            'label' => 'Bölge Türü',
            'options' => [
                'country' => 'Ülkelerle Sınırla',
                'states' => 'Eyaletlerle Sınırla',
                'postcodes' => 'Posta Kodlarıyla Sınırla',
            ],
        ],
        'price_display' => [
            'label' => 'Fiyat Gösterimi',
            'options' => [
                'include_tax' => 'Vergiyi Dahil Et',
                'exclude_tax' => 'Vergiyi Hariç Tut',
            ],
        ],
        'active' => [
            'label' => 'Aktif',
        ],
        'default' => [
            'label' => 'Varsayılan',
        ],

        'zone_countries' => [
            'label' => 'Ülkeler',
        ],

        'zone_country' => [
            'label' => 'Ülke',
        ],

        'zone_states' => [
            'label' => 'Eyaletler',
        ],

        'zone_postcodes' => [
            'label' => 'Posta Kodları',
            'helper' => 'Her posta kodunu yeni bir satırda listeleyin. NW* gibi joker karakterleri destekler',
        ],

    ],

];
