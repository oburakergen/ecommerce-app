<?php

namespace App\View\Components\Agency;

use Illuminate\View\Component;

class Menu extends Component
{
    /**
     * The alert message.
     *
     * @var object
     */
    public object $menu;


    /**
     * Create a new component instance.
     *
     * @param object $menu
     * @return void
     */
    public function __construct(object $menu)
    {
        $this->menu = $menu;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.agency.menu');
    }
}
