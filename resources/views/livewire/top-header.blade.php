<div>
    <x-svg />

    @livewire('cart-count')
    <x-search-canvas />
    <header>
        <div class="container-fluid">
            <div class="row py-3 border-bottom">

                <x-logo />
                <x-search />
                <x-support />
            </div>
            <div class="container-fluid">
                <div class="row py-3">
                    <div class="d-flex  justify-content-center justify-content-sm-between align-items-center">
                        <x-menu />
                        <x-coupon />
                    </div>
                </div>
            </div>
        </div>
    </header>
</div>
