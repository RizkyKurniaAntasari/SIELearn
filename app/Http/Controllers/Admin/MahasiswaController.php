<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = Mahasiswa::orderBy('id', 'desc')->paginate(10);
        return view('admin.mahasiswa.index', compact('mahasiswa'));
    }

    public function create()
    {
        return view('admin.mahasiswa.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_lengkap'   => 'required',
            'nim'            => 'required|unique:mahasiswas',
            'email'          => 'required|email|unique:mahasiswas',
            'jenis_kelamin'  => 'required',
            'status'         => 'required',
            'foto'           => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
        ]);

        $data = $request->only([
            'nama_lengkap',
            'nim',
            'email',
            'jenis_kelamin',
            'status'
        ]);

        if ($request->hasFile('foto')) {
            $data['foto'] = $request->file('foto')->store('mahasiswa', 'public');
        }

        Mahasiswa::create($data);

        return redirect()->route('admin.mahasiswa.index')
            ->with('success', 'Mahasiswa berhasil ditambahkan!');
    }

    public function edit(Mahasiswa $mahasiswa)
    {
        return view('admin.mahasiswa.edit', compact('mahasiswa'));
    }

    public function update(Request $request, Mahasiswa $mahasiswa)
    {
        $request->validate([
            'nama_lengkap'   => 'required',
            'nim'            => 'required|unique:mahasiswas,nim,' . $mahasiswa->id,
            'email'          => 'required|email|unique:mahasiswas,email,' . $mahasiswa->id,
            'jenis_kelamin'  => 'required',
            'status'         => 'required',
            'foto'           => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
        ]);

        $data = $request->only([
            'nama_lengkap',
            'nim',
            'email',
            'jenis_kelamin',
            'status'
        ]);

        if ($request->hasFile('foto')) {

            if ($mahasiswa->foto) {
                Storage::disk('public')->delete($mahasiswa->foto);
            }

            $data['foto'] = $request->file('foto')->store('mahasiswa', 'public');
        }

        $mahasiswa->update($data);

        return redirect()->route('admin.mahasiswa.index')
            ->with('success', 'Mahasiswa berhasil diperbarui!');
    }

    public function destroy(Mahasiswa $mahasiswa)
    {
        if ($mahasiswa->foto) {
            Storage::disk('public')->delete($mahasiswa->foto);
        }

        $mahasiswa->delete();

        return redirect()->route('admin.mahasiswa.index')
            ->with('success', 'Mahasiswa berhasil dihapus!');
    }
}
