<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pendaftaran;

class PendaftaranController extends Controller
{
    public function index()
    {
        return view('pendaftaran.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email',
            'no_hp' => 'required|string',
            'kelas' => 'required|string',
        ]);

        Pendaftaran::create($request->all());

        return redirect()->back()->with('success', 'Pendaftaran berhasil diajukan!');
    }
}
