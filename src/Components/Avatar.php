<?php

declare(strict_types=1);

namespace Mobtexting\LaravelComponents\Components;

class Avatar extends Component
{
    public string $name;
    public string $url;

    /**
     * Create a new component instance.
     */
    public function __construct(
        string $name = 'time',
        string $url = ''
    ) {
        if ($name) {
            preg_match_all('#(?<=\s|\b)\pL#u', $name, $matches);
            $name = implode('', array_slice($matches[0], 0, 2));
        }

        $this->name = $name;
        $this->url = $url;
    }
}
