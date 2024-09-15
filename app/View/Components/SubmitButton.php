<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SubmitButton extends Component
{
    public $cancelRoute;
    public $saveText;
    public $cancelText;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($cancelRoute, $saveText = 'Save', $cancelText = 'Cancel')
    {
        $this->cancelRoute = $cancelRoute;
        $this->saveText = $saveText;
        $this->cancelText = $cancelText;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.submit-button');
    }
}
