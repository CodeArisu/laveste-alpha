<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class buttonComponent extends Component
{
    
    public $btnTitle;
    public $btnType;

    private function setBtnType($btnType)
    {
       switch($btnType) {
            case 'primary':
                return 'btn-primary';
                break;
            case 'secondary':
                return 'btn-secondary';
                break;
            default:
                return 'btn-default';
                break;
       }
    }

    public function __construct($btnTitle, $btnType)
    {   
        $this->btnTitle = $btnTitle;
        $this->btnType = $this->setBtnType($btnType);
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.materials.button-component');
    }
}
