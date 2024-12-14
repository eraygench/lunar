<?php

return [

    'label' => 'Collection',

    'plural_label' => 'Collections',

    'form' => [
        'name' => [
            'label' => 'Name',
        ],
    ],

    'actions' => [
        'delete' => [
            'modal' => [
                'form' => [
                    'target_collection' => [
                        'label' => 'Target Collection',
                        'helper' => 'Choose which collection the children of this collection should be transferred to.',
                    ],
                ],
            ],
        ],
    ],

    'pages' => [
        'children' => [
            'label' => 'Child Collections',
            'actions' => [
                'create_child' => [
                    'label' => 'Create Child Collection',
                ],
            ],
            'empty_state' => [
                'label' => 'No collections',
                'description' => '',
            ],
            'table' => [
                'children_count' => [
                    'label' => 'No. Children',
                ],
                'name' => [
                    'label' => 'Name',
                ],
            ],
        ],
        'edit' => [
            'label' => 'Basic Information',
        ],
        'products' => [
            'label' => 'Products',
            'actions' => [
                'attach' => [
                    'label' => 'Attach Product',
                ],
            ],
            'empty_state' => [
                'label' => 'No products',
                'description' => '',
            ],
        ],
    ],

];
