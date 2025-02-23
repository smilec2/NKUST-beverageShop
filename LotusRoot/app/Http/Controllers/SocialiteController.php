<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Socialite;
use App\Models\User;
class SocialiteController extends Controller
{
    /**
    * Redirect the user to the Google authentication page.
    *
    * @return 301
    */

    public function redirectToProvider()
    {
        return Socialite::driver('google')->redirect();
    }

    /**
    * Obtain the user information from Google.
    *
    * @return \Illuminate\Http\Response
    */

    public function handleProviderCallback()
    {
        $user = Socialite::driver('google')->stateless()->user();
        // dd($user);
        // return redirect(route("home"))->with('success_message', '登入成功');

        


        $user_id = $user->id;
         // 儲存使用者資料
        if (User::where("google_id", $user_id)->first()) {
            $tmpuser = User::where('google_id', $user_id)->first();
            session([
                'user_id'   => $tmpuser->id,
                'user_type' => $tmpuser->type, // 'G' = 一般使用者, 'A' = 管理員
            ]);
            return redirect(route("home"))->with('success_message', '登入成功');


        } else {
            User::create([
                'name'         => $user->name,
                'email'        => $user->email,
                'google_id'    => $user_id,
            ]);
            $tmpuser = User::where('google_id', $user_id)->first();
            session([
                'user_id'   => $tmpuser->id,
                'user_type' => $tmpuser->type, // 'G' = 一般使用者, 'A' = 管理員
            ]);

            return redirect(route("home"))->with('success_message', '登入成功');
        }
    }
}