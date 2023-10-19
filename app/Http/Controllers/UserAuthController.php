<?php

namespace App\Http\Controllers;

use Closure;
use Illuminate\Support\Facades\Redirect;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserAuthController extends Controller
{






    public function loginPost(Request $request, Closure $next): Response

    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('homepage')
                ->withSuccess('You have Successfully loggedin');
        }
        return redirect()->route('login')->with('error', 'Đăng nhập thất bại');
    }
}
