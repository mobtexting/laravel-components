<?php

declare(strict_types=1);

namespace Mobtexting\LaravelComponents\Components;

use Bepsvpt\SecureHeaders\SecureHeaders;

class Script extends Component
{
    public array $defaults = [];

    public function __construct()
    {
        if (class_exists('Bepsvpt\SecureHeaders\SecureHeaders')) {
            $this->defaults['nonce'] = SecureHeaders::nonce('script');
        }
    }
}
