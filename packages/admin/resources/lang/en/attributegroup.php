<?php

return [

    'label' => 'Attribute Group',

    'plural_label' => 'Attribute Groups',

    'table' => [
        'attributable_type' => [
            'label' => 'Type',
        ],
        'name' => [
            'label' => 'Name',
        ],
        'handle' => [
            'label' => 'Handle',
        ],
        'position' => [
            'label' => 'Position',
        ],
    ],

    'empty_state' => [
        'label' => 'No attribute groups',
        'description' => '',
    ],

    'form' => [
        'attributable_type' => [
            'label' => 'Type',
        ],
        'name' => [
            'label' => 'Name',
        ],
        'handle' => [
            'label' => 'Handle',
        ],
        'position' => [
            'label' => 'Position',
        ],
    ],

    'attributable_types' => [
        'brand' => 'Brand',
        'collection' => 'Collection',
        'customer' => 'Customer',
        'customer_group' => 'Customer Group',
        'product' => 'Product',
        'product_variant' => 'Product Variant',
    ],

    'action' => [
        'delete' => [
            'notification' => [
                'error_protected' => 'This attribute group can not be deleted as there are attributes associated.',
            ],
        ],
    ],
];
