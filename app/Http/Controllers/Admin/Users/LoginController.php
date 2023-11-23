<?php

namespace App\Http\Controllers\Admin\Users;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.users.login',[
            'title'=> 'Đăng Nhập Hệ Thống'
        ]);
    }
    public function store(Request $request)
    {
        dd($request->input());
    }
}
