<?php
use Illuminate\Support\Facades\Route;
// ─── Routes độc lập ─────────────────────────────────────────
Route::get('/', function () {
    return view('welcome');
})->name('home');
Route::get('/about', function () {
    return view('about');
})->name('about');
Route::get('/contact', function () {
    return view('contact');
})->name('contact');
// ─── Route Group với prefix /shop ───────────────────────────
Route::prefix('shop')->name('shop.')->group(function () {
    Route::get('/products', function () {
        return view('shop.products');
    })->name('products');
    // → URI: /shop/products | Tên: shop.products
    Route::get('/cart', function () {
        return view('shop.cart');
    })->name('cart');
    // → URI: /shop/cart | Tên: shop.cart
});

use App\Http\Controllers\ArticleController;
Route::resource('articles', ArticleController::class);

use App\Http\Controllers\PostController;
Route::get('/posts', [PostController::class, 'index'])->name('posts.index');

use App\Http\Controllers\BlogController;
Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');