<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class textarea extends Component
{
    public $nombre;
    public $nombreLabel;
    public $id;
    public $nRows;

    public function __construct($nombre,$nombreLabel,$id,$nRows)
    {
        $this->nombre= $nombre;
        $this->nombreLabel= $nombreLabel;
        $this->id= $id;
        $this->nRows= $nRows;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.textarea');
    }
}
