<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithPagination;
class Sale extends Component
{
    use WithPagination;
    #[Layout('layouts.app')]
    public $search;
    public $sorting ='desc';
    public $perPage = 10;

    public function render()
    {
      
        $products = Product::search($this->search,$this->perPage,$this->sorting);
        $categories = Category::inRandomOrder()->limit(6)->get(['id','name','slug']);
        $brands = Brand::inRandomOrder()->limit(6)->get(['id','name','slug']);
        return view('livewire.sale',compact('products','categories','brands'));
    }
}
