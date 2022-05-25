<?php

namespace App\View\Components\Buttons;

use Illuminate\View\Component;

class Button extends Component
{

    public $text, $color, $route, $class, $type;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($text, $color = 'green', $route = 'create', $class = '', $type = 'button')
    {
        $this->text = $text;
        $this->color = $color;
        $this->route = $route;
        $this->class = $class;
        $this->type = $type;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.buttons.button');
    }
}
