<?php

namespace App\View\Components;

use Illuminate\Support\Facades\Blade;
use Illuminate\View\Component;

class Preview extends Component
{
    public function __construct(
        public string $code,
        public ?string $title = null,
        public array $data = [],
    ) {}

    public function renderedCode(): string
    {
        return Blade::render($this->code, $this->data);
    }

    public function render()
    {
        return view('components.preview');
    }
}
