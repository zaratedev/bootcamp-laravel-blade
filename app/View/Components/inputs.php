<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Input extends Component
{
    public $nombre;
    public $id;
    public $nombreLabel;
    public $autocomplete;
    
    public function __construct($nombre, $id, $nombreLabel, $autocomplete)
    {
        $this->nombre = $nombre;
        $this->id = $id;
        $this->nombreLabel = $nombreLabel;
        $this->autocomplete = $autocomplete;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.input');
    }
}
