<?php

namespace App\View\Components\Components\MenuHeader;

use Illuminate\View\Component;

class Admin.blade.php extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.components.menu-header.admin.blade.php');
    }
}
