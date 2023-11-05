<nav class="main-menu d-flex navbar navbar-expand-lg" >

    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
        aria-controls="offcanvasNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">

        <div class="offcanvas-header justify-content-center">
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>

        <div class="offcanvas-body">

            <select class="filter-categories border-0 mb-0 me-5">
                <option>Shop by Departments</option>
                <option>Groceries</option>
                <option>Drinks</option>
                <option>Chocolates</option>
            </select>

            <ul class="navbar-nav justify-content-end menu-list list-unstyled d-flex gap-md-3 mb-0"  >
                <li class="nav-item">
                    <a href="/" wire:navigate.hover class="nav-link active">Home</a>
                </li>
                <li class="nav-item">
                    <a href="/shop" wire:navigate.hover class="nav-link">Shop</a>
                </li>
                <li class="nav-item ">
                    <a href="/about-us" wire:navigate.hover class="nav-link">About Us</a>
                </li>
                <li class="nav-item">
                    <a href="/cart" wire:navigate.hover class="nav-link">Cart</a>
                </li>
                <li class="nav-item">
                    <a href="/checkout" wire:navigate.hover class="nav-link">Checkout</a>
                </li>
                <li class="nav-item">
                    <a href="/contact-us" wire:navigate.hover class="nav-link">Contact Us</a>
                </li>
                <li class="nav-item">
                    <a href="/brands" wire:navigate.hover class="nav-link">Brand</a>
                </li>
                <li class="nav-item">
                    <a href="/sale" wire:navigate.hover class="nav-link">Sale</a>
                </li>
                <li class="nav-item">
                    <a href="/blog" wire:navigate.hover class="nav-link">Blog</a>
                </li>
            </ul>

        </div>

    </div>

</nav>
