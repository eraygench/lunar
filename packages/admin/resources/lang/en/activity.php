<?php

return [

    'label' => 'Activity',

    'plural_label' => 'Activities',

    'table' => [
        'subject' => 'Subject',
        'description' => 'Description',
        'log' => 'Log',
        'logged_at' => 'Logged At',
        'event' => [
            'label' => 'Event',
            'options' => [
                'created' => 'Created',
                'updated' => 'Updated',
                'deleted' => 'Deleted',
            ],
        ],
        'logged_from' => 'Logged From',
        'logged_until' => 'Logged Until',
    ],

    'empty_state' => [
        'label' => 'No activities',
        'description' => '',
    ],

    'form' => [
        'causer_type' => 'Causer Type',
        'causer_id' => 'Causer Id',
        'subject_type' => 'Subject type',
        'subject_id' => 'Subject Id',
        'description' => 'Description',
        'attributes' => 'Attributes',
        'old' => 'Old',
    ],

];
