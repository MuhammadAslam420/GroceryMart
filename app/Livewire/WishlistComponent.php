<?php

namespace App\Livewire;

use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Attributes\Layout;
use Livewire\Attributes\On;
use Livewire\Component;
use Gloudemans\Shoppingcart\Facades\Cart;
class WishlistComponent extends Component
{
    use LivewireAlert;
    #[Layout('layouts.app')]

     public function moveItemToCart($rowId)
     {
        $item = Cart::instance('wishlist')->get($rowId);
        Cart::instance('wishlist')->remove($rowId);
        Cart::instance('cart')->add($item->id,$item->name,1,$item->price)->associate('App\Models\Product');
        $this->dispatch('product-added');
       $this->alert('success', 'Product has been move to your cart');
     }
     public function delete($rowId)
     {
         Cart::instance('wishlist')->remove($rowId);
         $this->dispatch('product-added');
         $this->alert('success','product has been remove from your wishlist');
     }
    #[On('product-added')]
    public function render()
    {
        return view('livewire.wishlist-component');
    }
}
