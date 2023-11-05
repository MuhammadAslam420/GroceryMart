<div>
    <section class="py-5 mb-5" style="background: url(images/background-pattern.jpg);">
      <div class="container-fluid">
        <div class="d-flex justify-content-between">
          <h1 class="page-title pb-2">Shop</h1>
          <nav class="breadcrumb fs-6">
            <a class="breadcrumb-item nav-link" href="/">Home</a>
            <a class="breadcrumb-item nav-link" href="#">Pages</a>
            <span class="breadcrumb-item active" aria-current="page">Shop</span>
          </nav>
        </div>
      </div>
    </section>

    <div class="shopify-grid">
      <div class="container-fluid">
        <div class="row">
          <aside class="col-md-3" >
            <div class="sidebar" wire:ignore>
             
              <x-sidebar_category :categories="$categories" />

              <x-brand :brands="$brands" />
              <x-price />
            </div>
          </aside>

          <main class="col-md-9">
            <div class="filter-shop d-flex justify-content-between mb-2 p-1">
              <div class="showing-product">
                <input wire:model.live="search" class="form-control" type="text" placeholder="Search products...">
              </div>
              <div class="showing-product">
                <select  class="form-control" wire:model.live='perPage'>
                  <option value="10">Default Page Size 10</option>
                  <option value="12">12</option>
                  <option value="16">16</option>
                  <option value="24">24</option>
                  <option value="32">32</option>
                  <option value="48">48</option>
                  <option value="64">64</option>
               
                </select>
              </div>
              <div class="sort-by">
                <select id="input-sort" class="form-control" wire:model.live='sorting'>
                  <option value="desc">Default sorting</option>
                  <option value="az">Name (A - Z)</option>
                  <option value="za">Name (Z - A)</option>
                  <option value="low">Price (Low-High)</option>
                  <option value="high">Price (High-Low)</option>
                  <option value="desc">New</option>
                  <option value="asc">Old</option>
                </select>
              </div>
            </div>

            <div class="product-grid row row-cols-sm-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4">
              @forelse ($products as $product)
              <div class="col">
                <div class="product-item">
                  <a href="#" class="btn-wishlist"><svg width="24" height="24"><use xlink:href="#heart"></use></svg></a>
                  <figure>
                    <a href="{{route('product',['slug'=>$product->slug])}}" title="Product Title">
                      <img src="{{asset('images')}}/{{$product->image}}"  class="tab-image">
                    </a>
                  </figure>
                  <h3>{{$product->name}}</h3>
                  <div class="flex justify-content-between">
                    <span class="qty">1 Unit</span><span class="flex rating p-1"><i class="bi bi-star-fill text-yellow-400"></i> 4.5</span>
                  </div>
                  <span class="price">{{$product->price}}</span>
                  <div class="flex align-items-center justify-content-between">
                    <div class="input-group product-qty">
                        <span class="input-group-btn">
                            <button  class="quantity-left-minus btn  btn-number hover:bg-red-500"  data-type="minus" data-field="">
                              <svg width="18" height="16"><use xlink:href="#minus"></use></svg>
                            </button>
                        </span>
                        <input type="text" id="quantity" name="quantity" class="form-control input-number" value="10" min="1" max="100">
                        <span class="input-group-btn">
                            <button  class="quantity-right-plus btn  btn-number hover:bg-green-500" data-type="plus" data-field="">
                                <svg width="18" height="16"><use xlink:href="#plus"></use></svg>
                            </button>
                        </span>
                    </div>
                    <a href="#" class="nav-link font-bold text-teal-600 p-1 hover:text-yellow-500"><i class="bi bi-bag-check-fill"></i> Add to Cart </a>
                  </div>
                </div>
              </div>
              @empty
              <div class="col">
                <div class="product-item">
                 No Product Available at the time
                </div>
              </div>
              @endforelse


            </div>


            {{$products->links()}}

          </main>

        </div>
      </div>
    </div>

    <section class="py-5">
      <div class="container-fluid">

        <div class="bg-secondary py-5 my-5 rounded-5" style="background: url('images/bg-leaves-img-pattern.png') no-repeat;">
          <div class="container my-5">
            <div class="row">
              <div class="col-md-6 p-5">
                <div class="section-header">
                  <h2 class="section-title display-4">Get <span class="text-primary">25% Discount</span> on your first purchase</h2>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Dictumst amet, metus, sit massa posuere maecenas. At tellus ut nunc amet vel egestas.</p>
              </div>
              <div class="col-md-6 p-5">
                <form>
                  <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text"
                      class="form-control form-control-lg" name="name" id="name" placeholder="Name">
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
