<?php

use App\Livewire\AboutUs;
use App\Livewire\Blog;
use App\Livewire\Brand;
use App\Livewire\Cart;
use App\Livewire\CartComponent;
use App\Livewire\Category;
use App\Livewire\Checkout;
use App\Livewire\Condition;
use App\Livewire\ContactUs;
use App\Livewire\Faq;
use App\Livewire\Guide;
use App\Livewire\Home;
use App\Livewire\Post;
use App\Livewire\Privacy;
use App\Livewire\ProductDetail;
use App\Livewire\Refund;
use App\Livewire\Sale;
use App\Livewire\Shop;
use App\Livewire\Terms;
use App\Livewire\ThnakYou;
use App\Livewire\WishlistComponent;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',Home::class)->name('home');
Route::get('/about-us',AboutUs::class)->name('about-us');
Route::get('/contact-us',ContactUs::class)->name('contact-us');
Route::get('/blog',Blog::class)->name('blog');
Route::get('/faq',Faq::class)->name('faq');
Route::get('/privacy',Privacy::class)->name('privacy');
Route::get('/condition',Condition::class)->name('condition');
Route::get('/terms',Terms::class)->name('terms');
Route::get('/guide',Guide::class)->name('guide');
Route::get('/refund',Refund::class)->name('refund');
Route::get('/shop',Shop::class)->name('shop');
Route::get('/category/{slug}',Category::class)->name('category');
Route::get('/brand/{slug}',Brand::class)->name('brand');
Route::get('/product/slug',ProductDetail::class)->name('product');
Route::get('/post/{slug}',Post::class)->name('post');
Route::get('/cart',CartComponent::class)->name('cart');
Route::get('/checkout',Checkout::class)->name('checkout');
Route::get('/thankyou',ThnakYou::class)->name('thankyou');
Route::get('/sale',Sale::class)->name('sale');
Route::get('/wishlist',WishlistComponent::class)->name('wishlist');
