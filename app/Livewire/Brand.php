<?php

namespace App\Livewire;

use App\Models\Brand as ModelBrand;
use App\Models\Product;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Category;
class Brand extends Component
{
    use WithPagination;
    public $slug;
    public $search;
    public $sorting = 'desc';
    public $perPage = 10;
    #[Layout('layouts.app')]
    public function mount($slug)
    {
        $this->slug = $slug;
    }
    public function render()
    {
        $brand = ModelBrand::where('slug',$this->slug)->first();
        $products = Product::search($this->search,$this->sorting)->where('brand_id',$brand->id)->where('stock','instock')->paginate($this->perPage);
        $categories = Category::inRandomOrder()->limit(6)->get(['name','slug']);
        $brands = ModelBrand::inRandomOrder()->limit(6)->get(['name','slug']);
        return view('livewire.brand',compact('products','categories','brands'));
    }
}
