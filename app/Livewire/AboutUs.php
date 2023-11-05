<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Component;

class AboutUs extends Component
{
    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.about-us');
    }
}
