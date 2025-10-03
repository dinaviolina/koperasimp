<?php

namespace App\View\Components\Admin\Das;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class HeaderComponents extends Component
{
    /**
     * Create a new component instance.
     */
    public $title;
    public function __construct($title=null)
    {
        $this->title = $title;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.admin.das.header-components');
    }
}
