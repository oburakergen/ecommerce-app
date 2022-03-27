<?php

namespace App\View\Components\Agency;

use Illuminate\View\Component;

class Language extends Component
{
    /**
     * The alert message.
     *
     * @var object
     */
    public object $language;

    /**
     * Create a new component instance.
     *
     * @param object $language
     * @return void
     */
    public function __construct(object $language)
    {
        $this->language = $language;
    }


    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.agency.language');
    }
}
