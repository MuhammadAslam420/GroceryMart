<li class="ml-5">
    <a href="{{ route('wishlist') }}"  class="rounded-full  p-1 mx-2">
      <span class="badge bg-dark text-light">@if(Cart::instance('wishlist')->count() > 0)
        {{ Cart::instance('wishlist')->count() }}
        @else
        0.0
        @endif</span>
      <svg width="28" height="28" viewBox="0 0 28 28"><use xlink:href="#heart"></use></svg>
      
      
    </a>
  </li>