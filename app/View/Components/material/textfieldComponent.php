<?php

namespace App\View\Components\material;

use Closure;
use Dotenv\Util\Str;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class textfieldComponent extends Component
{
    public String $placeholder;
    public String $label;

    public function __construct(String $placeholder, String $label)
    {
        $this->placeholder = $placeholder;
        $this->label = $label;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.material.textfield-component');
    }
}
