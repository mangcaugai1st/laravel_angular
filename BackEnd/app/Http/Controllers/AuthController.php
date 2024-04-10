<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showRegistrationForm()
    {
        return view('signup');
    }

    public function register(Request $request)
    {
        // Validate input
        $request->validate([
            'user_name' => 'required|unique:users',
            'user_password' => 'required',
        ]);

        // Create new user
        User::create([
            'user_name' => $request->user_name,
            'user_password' => bcrypt($request->user_password),
            'role' => 1, // Default role is user
        ]);

        // Redirect to login page
        return redirect('/dang_nhap');
    }

    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        // Validate input
        $request->validate([
            'user_name' => 'required',
            'user_password' => 'required',
        ]);

        // Find the user by user_name
        $user = User::where('user_name', $request->user_name)->first();

        // If user doesn't exist or password is incorrect, redirect back with error
        if (!$user || !Hash::check($request->user_password, $user->user_password)) {
            return redirect('/dang_nhap')->with('error', 'Invalid credentials');
        }

        // Check user role and redirect accordingly
        if ($user->role == 0) {
            return redirect('/trang_quan_ly');
        } else {
            return redirect('/');
        }
    }
    public function logout()
    {
        session()->forget('user_name');
        return redirect('/dang_nhap');
    }
}
