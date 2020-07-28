<?php

namespace App\Http\Controllers;

use App\user_view;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function checkout(){
        return view('users.checkout');
    }
}
