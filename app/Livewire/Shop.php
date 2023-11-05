<?php

namespace App\Livewire;

use App\Models\Brand;
use App\Models\Product;
use Livewire\Attributes\Layout;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Category;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Shop extends Component
{
    use WithPagination;
    use LivewireAlert;
 
  #[layout('layouts.app')]

    public $search;
    public $sorting ='desc';
    public $perPage = 10;
    public $qty= [];
   
    public function increaseQty($productId)
    {
        if (!isset($this->qty[$productId])) {
            $this->qty[$productId] = 1;
        } else {
            $this->qty[$productId]++;
        }
    }

    public function decreaseQty($productId)
    {
        if (isset($this->qty[$productId]) && $this->qty[$productId] > 0) {
            $this->qty[$productId]--;
        }
    }
    public function storeProduct($product,$name ,$price)
    {
        $quantity = $this->qty[$product];
        \Gloudemans\Shoppingcart\Facades\Cart::instance('cart')->add($product,$name, $quantity,$price)->associate('App\Models\Product');
        $this->dispatch('product-added');
       $this->alert('success', 'Product has been added to your cart');
    }
    public function addToWishlist($product,$name ,$price)
    {
        \Gloudemans\Shoppingcart\Facades\Cart::instance('wishlist')->add($product,$name, 1,$price)->associate('App\Models\Product');
        $this->dispatch('product-added');
       $this->alert('success', 'Product has been added to your wishlist');
    }
  
    #[On('product-added')]
    public function render()
    {
      
        $products = Product::search($this->search,$this->sorting)->paginate($this->perPage);
        $categories = Category::inRandomOrder()->limit(6)->get(['id','name','slug']);
        $brands = Brand::inRandomOrder()->limit(6)->get(['id','name','slug']);
        return view('livewire.shop',['products'=>$products,'categories'=>$categories,'brands'=>$brands] )->layout('layouts.app');
    }
}