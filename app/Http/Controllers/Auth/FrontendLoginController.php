<?php

namespace App\Http\Controllers\Auth;

use Session;
use Hash;
use Illuminate\Http\RedirectResponse;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FrontendLoginController extends Controller
{
    public function loginFrontend()
    {
        return view('frontend.login');
    }
    public function showRegistrationForm()
    {
        return view('frontend.registerUser');
    }
    // public function authenticate(Request $request)
    // {
    //     // Kiểm tra thông tin đăng nhập và đăng nhập người dùng bằng guard
    //     // Kiểm tra thông tin đăng nhập
    //     $credentials = $request->only('email', 'password');
    //     if (Auth::guard('web')->attempt($credentials)) {
    //         // Đăng nhập thành công, chuyển hướng người dùng đến trang dashboard hoặc bất kỳ trang nào bạn chọn
    //         return redirect('/page');
    //     }

    //     // Đăng nhập thất bại, quay lại trang đăng nhập với thông báo lỗi
    //     return redirect()->route('frontend.login')->with('error', 'Đăng nhập thất bại. Vui lòng thử lại.');
    // }
    public function authenticate(Request $request)
    {
        $credentials = $request->only('email', 'password');

        $message = 'Đăng nhập thất bại. Vui lòng thử lại.';

        if (empty($credentials['password'])) {
            $message = 'Mật khẩu không được để trống.';
            return redirect()->route('frontend.login')->with('error', $message);
        } elseif (Auth::guard('web')->attempt(['email' => $credentials['email'], 'password' => $credentials['password']])) {
            // Đăng nhập thành công, chuyển hướng người dùng đến trang dashboard hoặc trang bất kỳ bạn chọn
            return redirect('/page');
        } elseif (!Auth::guard('web')->attempt(['email' => $credentials['email'], 'password' => $credentials['password']])) {
            $message = 'Email không đúng.';
        }

        // Cung cấp thông báo lỗi phù hợp
        return redirect()->route('frontend.login')->withErrors(['email' => 'Email không đúng, hãy chắc chắn rằng bạn đã đăng ký tài khoản bằng email này', 'password' => 'Mật khẩu không đúng vui lòng nhập lại.']);
    }


    public function registerUser(Request $request)
    {
        // Validate thông tin đăng ký
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);

        // Tạo người dùng mới
        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
        ]);

        // Đăng nhập ngay sau khi đăng ký (tùy chọn)
        Auth::guard('frontend')->login($user);

        return redirect('/page');
    }
    public function logoutFrontend(): RedirectResponse
    {
        Session::flush();
        Auth::logout();
        return Redirect()->route('frontend.login');
    }
}
