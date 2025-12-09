<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Nilai;
use App\Models\Mahasiswa;
use App\Models\Kelas;
use Illuminate\Http\Request;

class NilaiController extends Controller
{
    public function index() {
        $nilai = Nilai::with(['mahasiswa','kelas'])->get();
        return view('admin.nilai.index', compact('nilai'));
    }

    public function create() {
        $mahasiswa = Mahasiswa::all();
        $kelas = Kelas::all();
        return view('admin.nilai.create', compact('mahasiswa','kelas'));
    }

    public function store(Request $request) {
        $request->validate([
            'mahasiswa_id' => 'required',
            'kelas_id' => 'required',
            'nilai' => 'required'
        ]);

        Nilai::create($request->all());
        return redirect()->route('admin.nilai.index')->with('success', 'Nilai ditambahkan');
    }

    public function edit($id) {
        $nilai = Nilai::findOrFail($id);
        $mahasiswa = Mahasiswa::all();
        $kelas = Kelas::all();
        return view('admin.nilai.edit', compact('nilai','mahasiswa','kelas'));
    }

    public function update(Request $request, $id) {
        $nilai = Nilai::findOrFail($id);
        $nilai->update($request->all());
        return redirect()->route('admin.nilai.index')->with('success', 'Nilai diperbarui');
    }

    public function destroy($id) {
        Nilai::findOrFail($id)->delete();
        return redirect()->route('admin.nilai.index')->with('success', 'Nilai dihapus');
    }
}
