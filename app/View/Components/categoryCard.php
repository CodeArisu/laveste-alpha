<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class categoryCard extends Component
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
        return view('components.category-card');
    }
}
