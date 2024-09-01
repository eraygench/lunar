<?php

return [
    'dropdown' => [
        'label' => 'Seçim',
        'form' => [
            'lookups' => [
                'label' => 'Seçim Değerleri',
                'key_label' => 'Yazı',
                'value_label' => 'Değer',
            ],
        ],
    ],
    'listfield' => [
        'label' => 'Liste',
    ],
    'text' => [
        'label' => 'Yazı',
        'form' => [
            'richtext' => [
                'label' => 'Zengin Metin',
            ],
        ],
    ],
    'translatedtext' => [
        'label' => 'Tercüme Edilmiş Yazı',
        'form' => [
            'richtext' => [
                'label' => 'Zengin Metin',
            ],
            'locales' => 'Diller',
        ],
    ],
    'toggle' => [
        'label' => 'Doğru-Yanlış',
    ],
    'youtube' => [
        'label' => 'YouTube',
    ],
    'vimeo' => [
        'label' => 'Vimeo',
    ],
    'number' => [
        'label' => 'Sayı',
        'form' => [
            'min' => [
                'label' => 'Minimum',
            ],
            'max' => [
                'label' => 'Maksimum',
            ],
        ],
    ],
    'file' => [
        'label' => 'Dosya',
        'form' => [
            'file_types' => [
                'label' => 'İzin Verilen Dosya Türleri',
                'placeholder' => 'Yeni MIME',
            ],
            'multiple' => [
                'label' => 'Birden Fazla Dosyaya İzin Ver',
            ],
            'min_files' => [
                'label' => 'Minimum Dosya Sayısı',
            ],
            'max_files' => [
                'label' => 'Maksimum Dosya Sayısı',
            ],
        ],
    ],
];
