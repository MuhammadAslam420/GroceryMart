<div>
    <section class="py-5 mb-5" style="background: url(images/background-pattern.jpg);">
        <div class="container-fluid">
          <div class="d-flex justify-content-between">
            <h1 class="page-title pb-2">Cart</h1>
            <nav class="breadcrumb fs-6">
              <a class="breadcrumb-item nav-link" href="/">Home</a>
              <a class="breadcrumb-item nav-link" href="#">Pages</a>
              <span class="breadcrumb-item active" aria-current="page">Cart</span>
            </nav>
          </div>
        </div>
      </section>
      <section class="shopify-cart padding-large">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-8">
              <div class="cart-table">
                <div class="cart-header">
                  <div class="row d-flex">
                    <h6 class="cart-title text-uppercase text-muted col-lg-4 pb-3">Product</h6>
                    <h6 class="cart-title text-uppercase text-muted col-lg-3 pb-3">Quantity</h6>
                    <h6 class="cart-title text-uppercase text-muted col-lg-4 pb-3">Subtotal</h6>
                  </div>
                </div>
                @forelse(Cart::instance('cart')->content() as $item)
                <div class="cart-item border-top border-bottom">
                  <div class="row align-items-center">
                    <div class="col-lg-4 col-md-3">
                      <div class="cart-info d-flex flex-wrap align-items-center mb-4">
                        <div class="col-lg-5">
                          <div class="card-image">
                            <img src="{{ asset('images') }}/{{ $item->model->image }}" alt="cloth" class="img-fluid">
                          </div>
                        </div>
                        <div class="col-lg-7">
                          <div class="card-detail ps-3">
                            <h5 class="card-title">
                              <a href="{{ route('product',['slug'=>$item->model->slug]) }}" class="text-decoration-none">{{ $item->name }}</a>
                            </h5>
                            <div class="card-price">
                              <span class="money text-dark" data-currency-usd="$1200.00">{{ $item->price }}</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-7">
                      <div class="row d-flex">
                        <div class="col-md-4">
                          <div class="input-group product-qty">
                            <span class="input-group-btn">
                                <button type="button" wire:click.prevent="decreaseQuantity('{{ $item->rowId }}')" class=" btn bg-red-500 hover:bg-red-600 h-12" data-type="minus" data-field="">
                                  <i class="bi bi-dash font-extrabold text-light"></i>
                                </button>
                            </span>
                            <input type="text" id="quantity" name="quantity" class="form-control w-35 border rounded-lg" value="{{ $item->qty }}" min="1" max="100">
                            <span class="input-group-btn">
                                <button type="button" wire:click.prevent="increaseQuantity('{{ $item->rowId }}')" class=" btn bg-green-500 h-12 hover:bg-green-600" data-type="plus" data-field="">
                                  <i class="bi bi-plus font-extrabold text-light"></i>
                                </button>
                            </span>
                          </div>
                        </div>
                        <div class="col-md-8 text-center">
                          <div class="total-price">
                            <span class="money text-dark">{{ $item->price * $item->qty }}</span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-1 col-md-2">
                      <div class="cart-remove">
                        <a href="#" wire:click.prevent="delete('{{ $item->rowId }}')">
                          <svg width="32px">
                            <use xlink:href="#trash"></use>
                          </svg>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                @empty
                <div class="cart-item border-top border-bottom">
                  <div class="row align-items-center">
                    <p>opps no product found in your cart.</p>
                  </div>
                </div>
                @endforelse
              </div>
            </div>
            <div class="col-md-4">
              <div class="cart-totals bg-grey padding-medium">
                <h4 class="text-dark pb-4">Cart Total</h4>
                <div class="total-price pb-5">
                  <table cellspacing="0" class="table text-uppercase">
                    <tbody>
                      <tr class="subtotal pt-2 pb-2 border-top border-bottom">
                        <th>Subtotal</th>
                        <td data-title="Subtotal">
                          <span class="price-amount amount text-dark ps-5">
                            <bdi>
                              <span class="price-currency-symbol"></span>{{ Cart::subtotal() }}
                            </bdi>
                          </span>
                        </td>
                      </tr>
                      <tr class="order-total pt-2 pb-2 border-bottom">
                        <th>Total</th>
                        <td data-title="Total">
                          <span class="price-amount amount text-dark ps-5">
                            <bdi>
                              <span class="price-currency-symbol"></span>{{ Cart::total() }}</bdi>
                          </span>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="button-wrap row g-2">
                  <div class="col-md-12"><a href="/shop" wire:navigate class="btn btn-dark btn-lg text-uppercase btn-rounded-none w-100">Continue Shopping</a></div>
                  <div class="col-md-12"><a href="/checkout" wire:navigate class="btn btn-primary btn-lg text-uppercase btn-rounded-none w-100">Proceed to checkout</a></div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </section>
      <section class="py-5">
        <div class="container-fluid">

          <div class="bg-secondary py-5 my-5 rounded-5" style="background: url('images/bg-leaves-img-pattern.png') no-repeat;">
            <div class="container my-5">
              <div class="row">
                <div class="col-md-6 p-5">
                  <div class="section-header">
                    <h2 class="section-title display-4">Get <span class="text-dark">25% Discount</span> on your first purchase</h2>
                  </div>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Dictumst amet, metus, sit massa posuere maecenas. At tellus ut nunc amet vel egestas.</p>
                </div>
                <div class="col-md-6 p-5">
                  <form>
                    <div class="mb-3">
                      <label for="name" class="form-label">Name</label>
                      <input type="text" class="form-control form-control-lg" name="name" id="name" placeholder="Name">
                    </div>
                    <div class="mb-3">
                      <label for="" class="form-label">Email</label>
                      <input type="email" class="form-control form-control-lg" name="email" id="email" placeholder="abc@mail.com">
                    </div>
                    <div class="form-check form-check-inline mb-3">
                      <label class="form-check-label" for="subscribe">
                      <input class="form-check-input" type="checkbox" id="subscribe" value="subscribe">
                      Subscribe to the newsletter</label>
                    </div>
                    <div class="d-grid gap-2">
                      <button type="submit" class="btn btn-dark btn-lg">Submit</button>
                    </div>
                  </form>

                </div>

              </div>

            </div>
          </div>

        </div>
      </section>
</div>
