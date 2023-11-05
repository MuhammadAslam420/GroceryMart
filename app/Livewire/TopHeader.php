<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\On;
class TopHeader extends Component
{
    #[on('product-added')]
    public function render()
    {
        return view('livewire.top-header');
    }
}
