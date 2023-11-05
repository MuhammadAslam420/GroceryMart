<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\On;

use Jantinnerezo\LivewireAlert\LivewireAlert;
class CartCount extends Component
{
    
    use LivewireAlert;
    

    public function delete($rowId)
    {
       $item = \Gloudemans\Shoppingcart\Facades\Cart::instance('cart')->remove($rowId);
        $this->dispatch('product-added');
        $this->alert('success','product has been remove from your cart');
    }
    #[on('product-added')]
    public function render()
    {
        return view('livewire.cart-count');
    }
}
