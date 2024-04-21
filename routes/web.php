<?php

use App\Livewire\Blogs\Index;
use App\Livewire\Blogs\Show;
use App\Livewire\Contact;
use App\Livewire\Home;
use App\Livewire\ShoppingCart;
use App\Livewire\Wishlist;
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

Route::get('/', Home::class)->name('home');

Route::get('/blogs', Index::class)->name('blogs.index');
Route::get('/blogs/{blog}', Show::class)->name('blogs.show');

Route::get('/my-wishlists', Wishlist::class)->name('wishlists');
Route::get('/shopping-cart', ShoppingCart::class)->name('shopping-cart');

Route::get('/contact-us', Contact::class)->name('contact-us');
