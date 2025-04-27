<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class ProjectCard extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public readonly string $image,
        public readonly string $title,
        public readonly string $description,
        public readonly string $link,
    ) {}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View
    {
        return view('components.project-card');
    }
}
