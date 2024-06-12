<?php

namespace App\View\Components\shared;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class indexProjectCard extends Component
{
    public string $title;
    public string $link;
    public string $thumbnail;

    public string $text;
    /**
     * Create a new component instance.
     */
    public function __construct($data)
    {
        $this->title = $data['title'];
        $this->link = $data['link'];
        $this->thumbnail = $data['thumbnail'];
        $this->text = $data['text'];
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.shared.index-project-card');
    }
}
