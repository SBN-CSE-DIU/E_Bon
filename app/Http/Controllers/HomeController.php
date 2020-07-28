<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    public function index()
    {
        if (Auth::guest())
            return view('/users/home');
        elseif (Auth::user()->role == "admin"){
            return redirect('/admin/');
        }else
            return view('/users/home');
    }
}
