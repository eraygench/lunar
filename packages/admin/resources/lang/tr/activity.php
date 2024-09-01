<?php

return [

    'label' => 'Aktivite',

    'plural_label' => 'Aktiviteler',

    'table' => [
        'subject' => 'Özne',
        'description' => 'Açıklama',
        'log' => 'Kayıt',
        'logged_at' => 'Kayıt Tarihi',
        'event' => [
            'label' => 'Olay',
            'options' => [
                'created' => 'Oluşturuldu',
                'updated' => 'Güncellendi',
                'deleted' => 'Silindi',
            ],
        ],
        'logged_from' => 'Kayıt Yeri',
        'logged_until' => 'Kayıt Tarihine Kadar',
    ],

    'empty_state' => [
        'label' => 'Henüz İşlem Yok',
        'description' => '',
    ],

    'form' => [
        'causer_type' => 'Sebep Türü',
        'causer_id' => 'Sebep Kimliği',
        'subject_type' => 'Özne Türü',
        'subject_id' => 'Özne Kimliği',
        'description' => 'Açıklama',
        'attributes' => 'Özel Alanlar',
        'old' => 'Eski',
    ],

];
