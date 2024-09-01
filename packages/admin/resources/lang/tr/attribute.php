<?php

return [

    'label' => 'Özel Alan',

    'plural_label' => 'Özel Alanlar',

    'table' => [
        'name' => [
            'label' => 'Adı',
        ],
        'description' => [
            'label' => 'Açıklama',
        ],
        'handle' => [
            'label' => 'Handle',
        ],
        'type' => [
            'label' => 'Tür',
        ],
    ],

    'empty_state' => [
        'label' => 'Henüz özel alan oluşturulmadı',
        'description' => '',
    ],

    'form' => [
        'attributable_type' => [
            'label' => 'Tür',
        ],
        'name' => [
            'label' => 'Adı',
        ],
        'description' => [
            'label' => 'Açıklama',
            'helper' => 'Girişin altında yardımcı metni görüntülemek için kullanın',
        ],
        'handle' => [
            'label' => 'Handle',
        ],
        'searchable' => [
            'label' => 'Aranabilir',
        ],
        'filterable' => [
            'label' => 'Filtrelenebilir',
        ],
        'required' => [
            'label' => 'Zorunlu',
        ],
        'type' => [
            'label' => 'Tür',
        ],
        'validation_rules' => [
            'label' => 'Geçerlilik Kuralları',
            'helper' => 'Özel alan kuralları, örnek: min:1|max:10|...',
        ],
    ],
];
