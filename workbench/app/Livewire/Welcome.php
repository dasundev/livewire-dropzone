<?php

namespace Workbench\App\Livewire;

use Illuminate\Contracts\View\View;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Welcome extends Component
{
    public $welcome;

    public $files;

    #[Layout('workbench::layouts.app')]
    public function render(): View
    {
        return view('workbench::welcome');
    }
}
