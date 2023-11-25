<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        return view('admin.home',[
            'title'=> 'Trang Admin'
        ]);
    }
}