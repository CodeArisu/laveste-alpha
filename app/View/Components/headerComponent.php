<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class headerComponent extends Component
{
    public $text;
    public String $textColor;

    public function textColor($color) : String
    {   
        $color = strtolower($color);

        switch($color) {
            case 'secondary':
               return 'text-secondary';
                break;
            default:
               return 'text-primary';
               break;
        }
    }

    public function __construct($text, $textColor)
    {
        $this->text = $text;
        $this->textColor = $this->textColor($textColor);
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.header-component');
    }
}
