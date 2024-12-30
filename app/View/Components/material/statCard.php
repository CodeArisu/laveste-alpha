<?php

namespace App\View\Components\material;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class statCard extends Component
{
    
    public $icon;
    public int $value;
    public String $title;

    public function __construct($icon, int $value, String $title)
    {
        $this->icon = $icon;
        $this->value = $value;
        $this->title = $title;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.material.stat-card');
    }
}
