<?php

declare(strict_types=1);

namespace Mobtexting\LaravelComponents\Components;

use InvalidArgumentException;

class Link extends Component
{
    public array $defaults = [];

    public string $action = '';

    protected array $allowedAction = [
        'show' => 'read-only',
        'create' => 'create-only',
        'update' => 'update-only',
        'import' => 'update-only',
        'delete' => 'delete-only',
        'export' => 'read-only',
        'download' => 'read-only',
    ];

    public function __construct(
        string $action = ''
    ) {
        $this->action = $action;
        $this->validateActions();
    }

    private function isAuthorized(): bool
    {
        return (! user()->isPermissionRevoked($this->allowedAction[$this->action])) || (empty($this->action)) ? true : false;
    }

    private function validateActions(): void
    {
        if (! in_array($this->action, array_keys(($this->allowedAction))) && ! empty($this->action)) {
            throw new InvalidArgumentException("Invalid status: $this->action. Link action must be one of: ".implode(', ', array_keys($this->allowedAction)));
        }
    }

    public function shouldRender(): bool
    {
        return $this->isAuthorized();
    }
}
