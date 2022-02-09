<?php

declare(strict_types=1);

namespace Mobtexting\LaravelComponents\Components;

class FormButtonCancel extends Component
{
    public string $label;
    
    public function __construct(string $label = '')
    {
       $this->label = $label; 
    }
}
