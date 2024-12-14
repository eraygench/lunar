<?php

return [

    'label' => 'Collection Group',

    'plural_label' => 'Collection Groups',

    'table' => [
        'name' => [
            'label' => 'Name',
        ],
        'handle' => [
            'label' => 'Handle',
        ],
        'collections_count' => [
            'label' => 'No. Collections',
        ],
    ],

    'empty_state' => [
        'label' => 'No collection groups',
        'description' => '',
    ],

    'form' => [
        'name' => [
            'label' => 'Name',
        ],
        'handle' => [
            'label' => 'Handle',
        ],
    ],

    'action' => [
        'delete' => [
            'notification' => [
                'error_protected' => 'This collection group can not be deleted as there are collections associated.',
            ],
        ],
    ],
];
