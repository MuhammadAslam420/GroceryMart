<div class="widget-product-categories pt-5">
    <h5 class="widget-title">Categories</h5>
    <ul class="product-categories sidebar-list list-unstyled">
        @forelse ($categories as $category)
        <li class="cat-item">
            <a href="{{route('category',['slug'=>$category->slug])}}" class="text-teal-500 space-x-2 px-2 font-extrabold">{{$category->name}}</a>
          </li>
        @empty
        <li class="cat-item">
            <a href="#" class="nav-link">No Category</a>
          </li>
        @endforelse
    </ul>
  </div>
