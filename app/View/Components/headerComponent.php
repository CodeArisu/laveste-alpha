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
        $this->textColor = 'text-secondary';
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.header-component');
    }
}
