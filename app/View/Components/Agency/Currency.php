<?php

namespace App\View\Components\Agency;

use Illuminate\View\Component;

class Currency extends Component
{
    /**
     * The alert message.
     *
     * @var object
     */
    public object $currency;

    /**
     * Create a new component instance.
     *
     * @param object $currency
     * @return void
     */
    public function __construct(object $currency)
    {
        $this->currency = $currency;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.agency.currency');
    }
}
