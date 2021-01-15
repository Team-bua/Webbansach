<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Session;
use App\Models\ProductType;
use App\Models\Cart;
use App\Models\Company;
use App\Models\Product;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('layout_index.header', function ($view) {
            $types = ProductType::all();
            $company = Company::all();
            $view->with(['types' => $types, 'company' => $company]);
        });
        view()->composer('layout_admin.header', function ($view) {
            $types = ProductType::all();
            $company = Company::all();
            $product = Product::all();
            $view->with(['types' => $types, 'company' => $company, 'product' => $product]);
        });
        view()->composer(['layout_index.page.cart', 'layout_index.page.checkout'], function ($view) {
            if (Session('cart')) {
                $oldcart = Session::get('cart');
                $cart = new Cart($oldcart);
                $view->with([
                    'cart' => Session::get('cart'),
                    'product_cart' => $cart->items,
                    'totalPrice' => $cart->totalPrice,
                    'totalQty' => $cart->totalQty
                ]);
            }
        });
        Schema::defaultStringLength(191);
    }
}
