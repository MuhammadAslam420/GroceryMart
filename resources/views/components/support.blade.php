<div class="col-sm-8 col-lg-4 d-flex justify-content-end gap-5 align-items-center mt-4 mt-sm-0 justify-content-center justify-content-sm-end">
    <div class="support-box text-end d-none d-xl-block">
      <span class="fs-6 text-muted">For Support?</span>
      <h5 class="mb-0">+980-34984089</h5>
    </div>

    <ul class="d-flex justify-content-end list-unstyled m-0">
      <li >
        <a href="#" class="rounded-full mx-2 p-1 ">
          <svg width="28" height="28" viewBox="0 0 28 28"><use xlink:href="#user"></use></svg>
        </a>
        
      </li>
      @livewire('wishlist-count-component')
      <li class="d-lg-none">
        <a href="#" class="rounded-circle bg-light p-2 mx-1" data-bs-toggle="offcanvas" data-bs-target="#offcanvasCart" aria-controls="offcanvasCart">
          <svg width="24" height="24" viewBox="0 0 24 24"><use xlink:href="#cart"></use></svg>
        </a>
      </li>
      <li class="d-lg-none">
        <a href="#" class="rounded-circle bg-light p-2 mx-1" data-bs-toggle="offcanvas" data-bs-target="#offcanvasSearch" aria-controls="offcanvasSearch">
          <svg width="24" height="24" viewBox="0 0 24 24"><use xlink:href="#search"></use></svg>
        </a>
      </li>
    </ul>

    <div class="cart text-end d-none d-lg-block dropdown">
      <button class="border-0 bg-transparent" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasCart" aria-controls="offcanvasCart">
        <span class="fs-6 text-muted dropdown-toggle">Your Cart</span>
        <h5 class="mb-0"><span class="cart-total">
          @if(Cart::instance('cart')->count() > 0)
          {{ Cart::total() }}
          @else
          0.0
          @endif
          </span></h5>
      </button>
    </div>

</div>
