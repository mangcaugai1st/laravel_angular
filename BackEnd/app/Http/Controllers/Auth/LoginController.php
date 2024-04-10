<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;

use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class LoginController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }
    public function handleGoogleCallback()
    {
        $googleUser = Socialite::driver('google')->user();
        if (!$googleUser) {
            // Xử lý trường hợp không có dữ liệu trả về từ Google
            return redirect()->route('/dang_nhap')->with('error', 'Không thể truy cập vào dữ liệu từ Google');
        }

        $user = User::where('email', $googleUser->email)->first();

        if (!$user) {
            $user = User::create([
                'name' => $googleUser->name,
                'email' => $googleUser->email,
                'password' => bcrypt('your-random-password')
            ]);
        }

        Auth::login($user);

        return redirect()->intended('/');
    }
}
