<?php

namespace App\Livewire;

use Livewire\Attributes\On;
use Livewire\Component;

class WishlistCountComponent extends Component
{
    #[On('product-added')]
    public function render()
    {
        return view('livewire.wishlist-count-component');
    }
}
