<?php

namespace App\Livewire;

use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Attributes\Layout;
use Livewire\Attributes\On;
use Livewire\Component;
use Gloudemans\Shoppingcart\Facades\Cart;

class CartComponent extends Component
{
    use LivewireAlert;
   
    #[Layout('layouts.app')]
    public $qty= [];
   
    public function increaseQuantity($rowId)
    {
        $product = Cart::instance('cart')->get($rowId);
        $qty = $product->qty + 1;
        Cart::instance('cart')->update($rowId, $qty);
        $this->dispatch('product-added');
        $this->alert('success','Product quantity increases');

    }
    public function decreaseQuantity($rowId)
    {
        $product = Cart::instance('cart')->get($rowId);
        $qty = $product->qty - 1;
        Cart::instance('cart')->update($rowId, $qty);
        $this->dispatch('product-added');
        $this->alert('success','Product quantity decreases');

    }
    public function delete($rowId)
    {
        Cart::instance('cart')->remove($rowId);
        $this->dispatch('product-added');
        $this->alert('success','product has been remove from your cart');
    }
    #[On('product-added')]
    public function render()
    {
        return view('livewire.cart-component');
    }
}
