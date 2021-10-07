<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class Sign_UpController extends Controller
{
    public function index()
    {
        return view('auth.Sign_Up');
    }

    public function store(Request $request)
    {
         /**
         * 
         * validate User
         * Store User
         * Sign the user in
         * Redirect the user
         * 
        */ 

        /**
         * User validation
         */
        $this->validate($request, [
            'name' => 'required',
            'username' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed',

        ]);

        /**
         * store the User details
         * and Sign in.
         */

        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        /**
         * Sign the user in
         */
       
        auth()->attempt($request->only('email', 'password'));
        
        /**
         * redirect 
         */

        return Redirect()->route('dashboard');

       
    }
}
