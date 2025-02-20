<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\User;  // ✅ 確保 User 類別正確引用

class AuthUserAdminMiddleware
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next): Response
    {
        // 1️⃣ 檢查 session 是否有 `user_id`，如果沒有就導回首頁 `/`
        if (!session()->has('user_id')) {
            return redirect('/')->send();  // ✅ 確保回傳 Response
        }

        // 2️⃣ 取得登入的使用者資訊
        $user_id = session()->get('user_id');
        $user = User::where('id', $user_id)->first();

        // 3️⃣ 確保使用者是管理者 (type === 'A')
        if (!$user || $user->type !== 'A') {
            return redirect('/')->send();  // ✅ 確保回傳 Response
        }

        // 4️⃣ 通過驗證，繼續執行控制器方法
        return $next($request);
    }
}
