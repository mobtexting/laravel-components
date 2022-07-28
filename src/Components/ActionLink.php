<?php

declare(strict_types=1);

namespace Mobtexting\LaravelComponents\Components;

class ActionLink extends Component
{
    public string $task;

    public bool $enabled = true;

    /**
     * Create a new component instance.
     */
    public function __construct(string $task = '')
    {
        $this->task = $task;
    }
}
