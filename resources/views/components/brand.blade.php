<div class="widget-product-brands pt-3">
    <h5 class="widget-title">Brands</h5>
    <ul class="product-tags sidebar-list list-unstyled">
        @forelse ($brands as $brand)
        <li class="tags-item">
            <a href="{{route('brand',['slug'=>$brand->slug])}}" class="nav-link text-teal-500 space-x-2 px-2 font-extrabold">{{$brand->name}}</a>
          </li>
        @empty
        <li class="tags-item">
            <a href="#" class="nav-link">No Brand Found</a>
          </li>
        @endforelse
    </ul>
  </div>
