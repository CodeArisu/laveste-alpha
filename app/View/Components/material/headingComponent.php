<?php

namespace App\View\Components\material;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class headingComponent extends Component
{
    public $text;
    public String $textColor;

    public function __construct($text, $textColor)
    {
        $this->text = $text;
        $this->textColor = $textColor;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.material.heading-component');
    }
}
