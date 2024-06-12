<?php

namespace App\View\Components\shared;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class indexProjectCard extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public $title,
        public $link,
        public $thumbnail,
        public $text,
    )
    {
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.shared.index-project-card');
    }
}
