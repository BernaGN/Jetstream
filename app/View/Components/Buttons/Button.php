<?php

namespace App\View\Components\Buttons;

use Illuminate\View\Component;

class Button extends Component
{

    public $text, $bgColor, $hover, $hoverElement, $route, $type, $textColor;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($text, $bgColor = 'green-500', $hoverElement = "bg", $hover = "green-600", $route = 'create()', $type = 'button', $textColor = 'white')
    {
        $this->text = $text;
        $this->bgColor = $bgColor;
        $this->hover = $hover;
        $this->hoverElement = $hoverElement;
        $this->route = $route;
        $this->type = $type;
        $this->textColor = $textColor;
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
