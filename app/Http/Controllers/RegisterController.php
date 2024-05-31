<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;

class RegisterController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'email' => ['required', 'string', 'email', 'max:50'],
            'password' => ['required', 'string', 'max:225', 'min:4'],
            'username' => ['required', 'string', 'max:50'],
        ]);

        $admin = Admin::create([
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'username' => $request->username,
        ]);
        
        return redirect()->route('login')->with('success', 'Pendaftaran berhasil silahkan login');
    }
    public function showRegistrationForm()
    {
        return view('register');
    }
}
