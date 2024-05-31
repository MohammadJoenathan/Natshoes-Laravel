<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $this->validate($request, [
            'username' => 'required',
            'password' => 'required',
        ]);

        $data = Admin::where('username', $request->input('username'))->first();

        if ($data && Hash::check($request->input('password'), $data->password)) {
            session(['username' => $data->username]);
            return redirect()->route('dashboard');
        } else {
            return redirect()->back()->with('error', 'Invalid username or password');
        }
    }
    public function showLoginForm()
    {
        return view('login');
    }
}
