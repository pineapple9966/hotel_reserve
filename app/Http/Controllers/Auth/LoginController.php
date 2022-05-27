<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    public function logout(Request $request)
    {
        Auth::guard()->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('home');
    }

    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credential = $request->only('email', 'password');

        if (Auth::guard()->attempt($credential)) {
            $request->session()->regenerate();
        }

        return redirect()->route('home');

        throw ValidationException::withMessages([
            'email' => ['メールアドレスまたはパスワードに誤りがあります']
        ]);
    }
}
