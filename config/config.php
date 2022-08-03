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
        'theme-checkbox' => [
            'view' => 'laravel-components::{framework}.theme-checkbox',
            'class' => Components\ThemeCheckbox::class,
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
        'theme-alert-danger' => [
            'view' => 'laravel-components::{framework}.alert.danger',
        ],
        'theme-alert-help' => [
            'view' => 'laravel-components::{framework}.alert.help',
        ],
        'theme-alert-success' => [
            'view' => 'laravel-components::{framework}.alert.success',
        ],
        'form-button-cancel' => [
            'view' => 'laravel-components::{framework}.button.cancel',
        ],
        'form-button-primary' => [
            'view' => 'laravel-components::{framework}.button.primary',
        ],
        'form-button-secondary' => [
            'view' => 'laravel-components::{framework}.button.secondary',
        ],
        'theme-checkbox' => [
            'view' => 'laravel-components::{framework}.theme-checkbox',
            'class' => Components\ThemeCheckbox::class,
        ],
        'filter-search' => [
            'view' => 'laravel-components::{framework}.filters.search',
            'class' => Components\FilterSearch::class,
        ],
        'filter-dates' => [
            'view' => 'laravel-components::{framework}.filters.dates',
            'class' => Components\FilterDates::class,
        ],
        'script' => [
            'view' => 'laravel-components::{framework}.script',
            'class' => Components\Script::class,
        ],
        'style' => [
            'view' => 'laravel-components::{framework}.style',
            'class' => Components\Style::class,
        ],
        'form-file' => [
            'view' => 'laravel-components::{framework}.form-file',
            'class' => Components\FormFile::class,
        ],
        'action-link' => [
            'view' => 'laravel-components::{framework}.action-link',
            'class' => Components\ActionLink::class,
        ],
    ],
];
