<?php

namespace App\View\Components\material;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class radioButton extends Component
{
    public String $placeholder;

    public function __construct(String $placeholder)
    {
        $this->placeholder = $placeholder;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.material.radio-button');
    }
}
