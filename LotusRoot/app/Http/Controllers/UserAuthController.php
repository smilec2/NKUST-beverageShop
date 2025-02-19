<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Hash;
use App\Models\User;
use Illuminate\Support\Facades\Mail;

class UserAuthController extends Controller
{

    public function SignUpPage()
    {
       //
    }

    // 註冊
    public function SignUpProcess(Request $request)
    {
       // 獲取所有資料
        $input = $request->all();

       // 驗證資料
        $validator = Validator::make($input, [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'phone_number' => 'required|regex:/^[0-9]{10}$/',
            'password' => 'required|min:6|confirmed|regex:/[A-Z]/', // 確保 password 和 confirm_password 一致
        ]);

       // 驗證失敗時，返回錯誤訊息
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()->toArray()
           ], 400);  // 400 是驗證錯誤代碼
        }

        // 密碼加密
        $input['password'] = Hash::make($input['password']);

        try {
            // 儲存使用者資料
            User::create([
                'name' => $input['name'],
                'email' => $input['email'],
                'phone_number' => $input['phone_number'],
                'password' => $input['password'],
            ]);

            return response()->json([
                'success' => true,
                'message' => '註冊成功'
            ]);
        } catch (\Exception $e) {
           // 擴展錯誤捕捉，打印具體錯誤
            \Log::error('註冊過程錯誤:', ['error' => $e->getMessage(), 'trace' => $e->getTraceAsString()]);
            return response()->json([
                'success' => false,
                'message' => '註冊發生錯誤，請稍後再試。',
                'errors' => $e->getMessage()
           ], 500);  // 500 是伺服器錯誤代碼
        }
    }

     // 登入邏輯
    public function SignInProcess(Request $request)
    {
        // 輸出收到的請求資料
        $input = $request->only('email', 'password');
        if (empty($input['email']) || empty($input['password'])) {
            return response()->json([
                'success' => false,
                'errors' => [
                    'email' => empty($input['email']) ? '請輸入有效的電子郵件' : null,
                    'password' => empty($input['password']) ? '請輸入密碼' : null
                ]
            ], 400);
        }
        $tmpuser = User::where('email', $input['email'])->first(); 
        if (is_null($tmpuser)) {
            return response()->json([
                'success' => false,
                'errors' => [
                    'email' => '查無此帳號'
                ]
            ], 400);
        }
        if (!Hash::check($input['password'], $tmpuser->password)) {
            return response()->json([
                'success' => false,
                'errors' => [
                    'password' => '密碼錯誤'
                ]
            ], 400);
        }
        session()->put('user_id', $tmpuser->id);
        return response()->json([
            'success' => true,
            'message' => '登入成功'
        ]);
    }

    public function SignOut()
    {
        session()->forget('user_id');  // 清除 session 中的 user_id
        return redirect('/');  // 登出後重定向回登入頁面
    }
}