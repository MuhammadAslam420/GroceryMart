<div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="offcanvasCart" aria-labelledby="My Cart">
    <div class="offcanvas-header justify-content-center">
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body" >
     @if(Cart::instance('cart')->content()->count() > 0)
     <div class="order-md-last">
      <h4 class="d-flex justify-content-between align-items-center mb-3">
        <span class="text-primary">Your cart</span>
        <span class="badge bg-primary rounded-pill">{{ Cart::instance('cart')->count() }}</span>
      </h4>
      <ul class="list-group mb-3">
        @foreach(Cart::instance('cart')->content() as $item)
        <li class="list-group-item d-flex justify-content-between lh-sm">
          <div>
            <h6 class="my-0">{{ $item->name }}</h6>
            <small class="text-body-secondary">{{ $item->model->short_description }}</small>
          </div>
          <span class="text-body-secondary">{{ $item->price }}</span>
          <span><button class="btn bg-red-500" wire:click.prevent="delete('{{ $item->rowId }}')"><i class="bi bi-trash"></i></button></span>
        </li>
        @endforeach
     
        <li class="list-group-item d-flex justify-content-between">
          <span>Grand Total</span>
          <strong>{{ Cart::total() }}</strong>
        </li>
      </ul>

      <a href="/checkout" class="w-100 btn bg-yellow-400 hover:bg-green-500 btn-lg" >Continue to checkout</a>
    </div>
    @else
    <div class="order-md-last">
      <h4 class="d-flex justify-content-between align-items-center mb-3">
        <span class="text-primary">Your cart</span>
        <span class="badge bg-primary rounded-pill">0</span>
      </h4>
    </div>
    @endif
    </div>
  </div>
