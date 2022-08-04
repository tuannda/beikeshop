<?php

use Beike\Models\Customer;
use Beike\Shop\Http\Controllers\Account\WishlistController;
use Beike\Shop\Http\Controllers\BrandController;
use Beike\Shop\Http\Controllers\CurrencyController;
use Beike\Shop\Http\Controllers\LanguageController;
use Illuminate\Support\Facades\Route;
use Beike\Shop\Http\Controllers\ZoneController;
use Beike\Shop\Http\Controllers\CartController;
use Beike\Shop\Http\Controllers\HomeController;
use Beike\Shop\Http\Controllers\PagesController;
use Beike\Shop\Http\Controllers\ProductController;
use Beike\Shop\Http\Controllers\CategoryController;
use Beike\Shop\Http\Controllers\CheckoutController;
use Beike\Shop\Http\Controllers\Account\LoginController;
use Beike\Shop\Http\Controllers\Account\OrderController;
use Beike\Shop\Http\Controllers\Account\LogoutController;
use Beike\Shop\Http\Controllers\Account\AddressController;
use Beike\Shop\Http\Controllers\Account\EditController;
use Beike\Shop\Http\Controllers\Account\AccountController;
use Beike\Shop\Http\Controllers\Account\RegisterController;
use Beike\Shop\Http\Controllers\Account\ForgottenController;


Route::prefix('/')
    ->name('shop.')
    ->middleware(['shop'])
    ->group(function () {
        Route::get('/', [HomeController::class, 'index'])->name('home.index');

        Route::get('brands', [BrandController::class, 'index'])->name('brands.index');
        Route::get('brands/autocomplete', [BrandController::class, 'autocomplete'])->name('brands.autocomplete');
        Route::get('brands/{id}', [BrandController::class, 'show'])->name('brands.show');

        Route::get('carts', [CartController::class, 'index'])->name('carts.index');
        Route::post('carts', [CartController::class, 'store'])->name('carts.store');
        Route::get('carts/mini', [CartController::class, 'miniCart'])->name('carts.mini');
        Route::put('carts/{cart}', [CartController::class, 'update'])->name('carts.update');
        Route::post('carts/select', [CartController::class, 'select'])->name('carts.select');
        Route::delete('carts/{cart}', [CartController::class, 'destroy'])->name('carts.destroy');

        Route::get('categories', [CategoryController::class, 'index'])->name('categories.index');
        Route::get('categories/{category}', [CategoryController::class, 'show'])->name('categories.show');

        Route::get('countries/{id}/zones', [ZoneController::class, 'index'])->name('countries.zones.index');

        Route::get('currency/{currency}', [CurrencyController::class, 'index'])->name('currency.switch');

        Route::get('forgotten', [ForgottenController::class, 'index'])->name('forgotten.index');
        Route::post('forgotten/send_code', [ForgottenController::class, 'sendVerifyCode'])->name('forgotten.send_code');
        Route::post('forgotten/password', [ForgottenController::class, 'changePassword'])->name('forgotten.password');

        Route::get('lang/{lang}', [LanguageController::class, 'index'])->name('lang.switch');

        Route::get('login', [LoginController::class, 'index'])->name('login.index');
        Route::post('login', [LoginController::class, 'store'])->name('login.store');
        Route::get('logout', [LogoutController::class, 'index'])->name('logout');

        Route::get('products/{product}', [ProductController::class, 'show'])->name('products.show');

        Route::get('register', [RegisterController::class, 'index'])->name('register.index');
        Route::post('register', [RegisterController::class, 'store'])->name('register.store');

        Route::middleware('shop_auth:' . Customer::AUTH_GUARD)
            ->group(function () {
                Route::get('checkout', [CheckoutController::class, 'index'])->name('checkout.index');
                Route::put('checkout', [CheckoutController::class, 'update'])->name('checkout.update');
                Route::post('checkout/confirm', [CheckoutController::class, 'confirm'])->name('checkout.confirm');
                Route::get('orders/{number}/success', [OrderController::class, 'success'])->name('orders.success');
                Route::get('orders/{number}/pay', [OrderController::class, 'pay'])->name('orders.pay');
                Route::post('orders/{number}/pay', [OrderController::class, 'capture'])->name('orders.capture');
            });

        Route::prefix('account')
            ->middleware('shop_auth:' . Customer::AUTH_GUARD)
            ->group(function () {
                Route::get('/', [AccountController::class, 'index'])->name('account.index');
                Route::resource('addresses', AddressController::class);
                Route::get('edit', [EditController::class, 'index'])->name('account.edit.index');
                Route::get('orders', [OrderController::class, 'index'])->name('account.order.index');
                Route::get('orders/{number}', [OrderController::class, 'show'])->name('account.order.show');
                Route::post('update', [AccountController::class, 'update'])->name('account.update');
                Route::get('update_password', [AccountController::class, 'updatePassword'])->name('account.update_password');
                Route::get('wishlist', [WishlistController::class, 'index'])->name('account.wishlist.index');
                Route::post('wishlist', [WishlistController::class, 'add'])->name('account.wishlist.add');
                Route::delete('wishlist/{id}', [WishlistController::class, 'remove'])->name('account.wishlist.remove');
            });
    });

Route::get('/{url_key}', [PagesController::class, 'show'])->name('pages.show');
