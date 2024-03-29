<?php

declare(strict_types=1);

namespace Mobtexting\LaravelComponents\Components;

class Avatar extends Component
{
    public ?string $name;

    public ?string $url;

    public string $color;

    public bool $stacked;

    /**
     * Create a new component instance.
     */
    public function __construct(
        string $name = null,
        string $url = '',
        string $color = null,
        bool $stacked = false
    ) {
        $this->color = $color ?? $this->getColor($name);

        if ($name) {
            preg_match_all('#(?<=\s|\b)\pL#u', $name, $matches);
            $name = implode('', array_slice($matches[0], 0, 2));
        }

        $this->name = $name;
        $this->url = $url;
        $this->stacked = $stacked;
    }

    protected function getColor($name)
    {
        if ($name === null || strlen($name) === 0) {
            $name = chr(random_int(65, 90));
        }

        $colors = [
            'bg-blue-lt',
            'bg-azure-lt',
            'bg-indigo-lt',
            'bg-purple-lt',
            'bg-pink-lt',
            'bg-red-lt',
            'bg-orange-lt',
            'bg-yellow-lt',
            'bg-lime-lt',
            'bg-green-lt',
            'bg-teal-lt',
            'bg-cyan-lt',
            'bg-gray-200',
            'bg-gray-300',
        ];

        return $this->getRandomElement($colors, $name);
    }

    protected function getRandomElement($array, $name)
    {
        if (count($array) == 0) {
            return null;
        }

        $number = ord($name[0]);
        $i = 1;
        $charLength = strlen($name);
        while ($i < $charLength) {
            $number += ord($name[$i]);
            $i++;
        }

        return $array[$number % count($array)];
    }
}
