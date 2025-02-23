<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Cart;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        
    // 共享購物車數量到所有視圖
    View::composer('*', function ($view) {
        // 檢查 session 是否有 user_id（表示用戶已登入）
        if (session('user_id')) {
            // 取得 session 中的 user_id
            $userId = session('user_id');
            
            // 根據 user_id 查詢該用戶的購物車數量
            $cartCount = Cart::where('user_id', $userId)->count();
            
            // 把購物車數量共享給所有視圖
            $view->with('cart_count', $cartCount);
        }
    });
    }
}
