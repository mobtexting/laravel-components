<?php

use Mobtexting\LaravelComponents\Components;

return [
    'prefix' => '',

    /** tailwind | tailwind-2 | tailwind-forms-simple | bootstrap-4 | bootstrap-5 */
    'framework' => 'bootstrap-4',

    'use_eloquent_date_casting' => false,

    /** bool | string */
    'default_wire' => false,

    'components' => [
        'form-switch' => [
            'view'  => 'laravel-components::{framework}.form-switch',
            'class' => Components\FormSwitch::class,
        ],
    ],
];
