<?php

declare(strict_types=1);

use Mobtexting\LaravelComponents\Components;

return [
    'prefix' => '',

    // tailwind | tailwind-2 | tailwind-forms-simple | bootstrap-4 | bootstrap-5
    'framework' => 'bootstrap-4',

    'use_eloquent_date_casting' => false,

    // bool | string
    'default_wire' => false,

    'components' => [
        'form-switch' => [
            'view' => 'laravel-components::{framework}.form-switch',
            'class' => Components\FormSwitch::class,
        ],
        'form-button' => [
            'view' => 'laravel-components::{framework}.form-button',
            'class' => Components\FormButton::class,
        ],
        'form-select-group' => [
            'view' => 'laravel-components::{framework}.form-select-group',
            'class' => Components\FormSelectGroup::class,
        ],
        'form-select-item' => [
            'view' => 'laravel-components::{framework}.form-select-item',
            'class' => Components\FormSelectItem::class,
        ],
        'theme-counter' => [
            'view' => 'laravel-components::{framework}.theme-counter',
        ],
        'theme-modal' => [
            'view' => 'laravel-components::{framework}.theme-modal',
        ],
        'theme-alert-error' => [
            'view' => 'laravel-components::{framework}.alert.error',
        ],
        'theme-alert-warning' => [
            'view' => 'laravel-components::{framework}.alert.warning',
        ],
        'theme-alert-help' => [
            'view' => 'laravel-components::{framework}.alert.help',
        ],
        'theme-alert-success' => [
            'view' => 'laravel-components::{framework}.alert.success',
        ],
        'form-button-cancel' => [
            'view' => 'laravel-components::{framework}.button.cancel',
            'class' => Components\FormButtonCancel::class,
        ],
        'form-button-primary' => [
            'view' => 'laravel-components::{framework}.button.primary',
            'class' => Components\FormButtonPrimary::class,
        ],
        'form-button-secondary' => [
            'view' => 'laravel-components::{framework}.button.secondary',
            'class' => Components\FormButtonSecondary::class,

        ],
    ],
];
