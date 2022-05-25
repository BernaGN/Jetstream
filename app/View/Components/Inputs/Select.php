<?php

namespace App\View\Components\Inputs;

use Illuminate\View\Component;

class Select extends Component
{

    public $text, $name;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($text, $name)
    {
        $this->text = $text;
        $this->name = $name;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.inputs.select');
    }
}
