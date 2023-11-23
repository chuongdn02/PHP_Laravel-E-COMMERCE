<?php

namespace App\Http\Controllers\Admin\Users;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    /**
     * Hiển thị trang đăng nhập.
     */
    public function index()
    {
        return view('admin.users.login', [
            'title' => 'Đăng Nhập Hệ Thống'
        ]);
    }

    /**
     * Xử lý đăng nhập khi người dùng gửi mẫu đăng nhập.
     */
    public function store(Request $request)
    {
        // Xác thực và kiểm tra dữ liệu đầu vào
        $this->validate($request, [
            'email' => 'required|email:filter',
            'password' => 'required'
        ]);

        // Thực hiện đăng nhập với thông tin người dùng
        if (Auth::attempt([
            'email' => $request->input('email'),
            'password' => $request->input('password')
        ], $request->input('remember'))) {
            // Nếu đăng nhập thành công, chuyển hướng đến trang admin
            return redirect()->route('admin');
        }

        // Nếu đăng nhập thất bại, chuyển hướng về trang trước đó
        return redirect()->back();
    }
}
