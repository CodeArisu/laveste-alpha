<?php

namespace App\View\Components\material;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class categoryCardComponent extends Component
{
    public $text;
    public $url;
    public $image;

    public function __construct($text, $url, $image)
    {   
        $this->text = $text;
        $this->url = $url;
        $this->image = $image;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.material.category-card-component');
    }
}
