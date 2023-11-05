<?php

namespace App\Livewire;

use App\Models\Brand;
use App\Models\Category as ModelsCategory;
use App\Models\Product;
use App\Models\SubCategory;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithPagination;

class Category extends Component
{
    use WithPagination;
    public $slug;
    #[Layout('layouts.app')]
    public $search;
    public $sorting = 'desc';
    public $perPage = 10;
    public function mount($slug)
    {
        $this->slug = $slug;
    }
    public function render()
    {
        $category = ModelsCategory::where('slug',$this->slug)->first();
       // dd($category);
        $subcategories = SubCategory::where('category_id',$category->id)->get();
        $subId = $subcategories->pluck('id');
        $products = Product::search($this->search,$this->sorting)->whereIn('sub_category_id',$subId)->where('stock','instock')->paginate($this->perPage);
        $categories = ModelsCategory::inRandomOrder()->limit(6)->get(['name','slug']);
        $brands = Brand::inRandomOrder()->limit(6)->get(['name','slug']);
        return view('livewire.category',compact('products','categories','brands'));
    }
}
