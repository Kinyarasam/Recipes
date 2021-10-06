<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Sign_UpController extends Controller
{
    public function index()
    {
        return view('auth.Sign_Up');
    }
}
