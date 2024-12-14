<?php

return [

    'label' => 'Brand',

    'plural_label' => 'Brands',

    'table' => [
        'name' => [
            'label' => 'Name',
        ],
        'products_count' => [
            'label' => 'No. Products',
        ],
    ],

    'empty_state' => [
        'label' => 'No brands',
        'description' => '',
    ],

    'form' => [
        'name' => [
            'label' => 'Name',
        ],
    ],

    'action' => [
        'delete' => [
            'notification' => [
                'error_protected' => 'This brand can not be deleted as there are products associated.',
            ],
        ],
    ],
    'pages' => [
        'edit' => [
            'label' => 'Basic Information',
        ],
        'products' => [
            'label' => 'Products',
            'actions' => [
                'attach' => [
                    'label' => 'Associate a product',
                    'form' => [
                        'record_id' => [
                            'label' => 'Product',
                        ],
                    ],
                    'notification' => [
                        'success' => 'Product attached to brand',
                    ],
                ],
                'detach' => [
                    'notification' => [
                        'success' => 'Product detached.',
                    ],
                ],
            ],
            'empty_state' => [
                'label' => 'No products',
                'description' => '',
            ],
        ],
        'collections' => [
            'label' => 'Collections',
            'table' => [
                'header_actions' => [
                    'attach' => [
                        'record_select' => [
                            'placeholder' => 'Select a collection',
                        ],
                    ],
                ],
            ],
            'empty_state' => [
                'label' => 'No collections',
                'description' => '',
            ],
        ],
    ],

];
