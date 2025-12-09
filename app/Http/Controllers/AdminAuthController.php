<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AdminAuthController extends Controller
{
    public function showRegister()
    {
        return view('admin.auth.register');
    }

    public function register(Request $req)
    {
        $req->validate([
            'name' => 'required',
            'email' => 'required|email|unique:admins,email',
            'password' => 'required|min:6'
        ]);

        Admin::create([
            'name' => $req->name,
            'email' => $req->email,
            'password' => Hash::make($req->password)
        ]);

        return redirect()->route('admin.login')->with('success','Registrasi berhasil!');
    }

    public function showLogin()
    {
        return view('admin.auth.login');
    }

    public function login(Request $req)
    {
        $admin = Admin::where('email', $req->email)->first();

        if (!$admin || !Hash::check($req->password, $admin->password)) {
            return back()->with('error','Email atau password salah');
        }

        Session::put('admin', $admin);

        return redirect()->route('admin.dashboard');
    }

    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function logout()
    {
        Session::forget('admin');
        return redirect()->route('admin.login');
    }
}

