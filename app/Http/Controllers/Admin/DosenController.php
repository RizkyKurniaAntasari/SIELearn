<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Dosen;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function index()
    {
        $dosen = Dosen::orderBy('id', 'desc')->paginate(10);
        return view('admin.dosen.index', compact('dosen'));
    }

    public function create()
    {
        return view('admin.dosen.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_lengkap' => 'required',
            'nidn' => 'required|unique:dosen',
            'email' => 'required|email|unique:dosen',
            'status' => 'required'
        ]);

        Dosen::create([
            'nama_lengkap' => $request->nama_lengkap,
            'nidn' => $request->nidn,
            'email' => $request->email,
            'status' => $request->status
        ]);

        return redirect()->route('admin.dosen.index')
            ->with('success', 'Dosen berhasil ditambahkan!');
    }

    public function edit(Dosen $dosen)
    {
        return view('admin.dosen.edit', compact('dosen'));
    }

    public function update(Request $request, Dosen $dosen)
    {
        $request->validate([
            'nama_lengkap' => 'required',
            'nidn' => 'required|unique:dosen,nidn,' . $dosen->id,
            'email' => 'required|email|unique:dosen,email,' . $dosen->id,
            'status' => 'required'
        ]);

        $dosen->update($request->all());

        return redirect()->route('admin.dosen.index')
            ->with('success', 'Dosen berhasil diperbarui!');
    }

    public function destroy(Dosen $dosen)
    {
        $dosen->delete();
        return redirect()->route('admin.dosen.index')
            ->with('success', 'Dosen berhasil dihapus!');
    }
}
