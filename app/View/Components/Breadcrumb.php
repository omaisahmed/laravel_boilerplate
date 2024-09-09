<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Breadcrumb extends Component
{
    public $items;
    public $title;

    /**
     * Create a new component instance.
     *
     * @param  array  $items
     * @param  string  $title
     * @return void
     */
    public function __construct($items = [], $title = '')
    {
        $this->items = $items;
        $this->title = $title;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.breadcrumb');
    }
}
