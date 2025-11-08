<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;

class AdminController extends Controller
{
    public function index()
    {
        $users = Mahasiswa::all();
        return view('admin.manage_users', compact('users'));
    }

    public function detail($id)
    {
        $user = Mahasiswa::findOrFail($id);
        return view('admin.manage_user_detail', compact('user'));
    }
}
