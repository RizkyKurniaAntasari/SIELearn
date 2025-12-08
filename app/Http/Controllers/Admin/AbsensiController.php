<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Absensi;
use App\Models\Mahasiswa;
use App\Models\Kelas;

class AbsensiController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | INDEX (List)
    |--------------------------------------------------------------------------
    */
    public function index(Request $request)
    {
        $absensi = Absensi::with(['mahasiswa', 'kelas'])
            ->orderBy('created_at', 'desc')
            ->paginate(10);

        $kelas = Kelas::all();
        $mahasiswa = Mahasiswa::all();

        return view('admin.absensi.index', compact('absensi', 'kelas', 'mahasiswa'));
    }


    /*
    |--------------------------------------------------------------------------
    | CREATE
    |--------------------------------------------------------------------------
    */
    public function create()
    {
        $kelas = Kelas::all();
        $mahasiswa = Mahasiswa::all();

        return view('admin.absensi.create', compact('kelas', 'mahasiswa'));
    }


    /*
    |--------------------------------------------------------------------------
    | STORE
    |--------------------------------------------------------------------------
    */
    public function store(Request $request)
    {
        $request->validate([
            'mahasiswa_id' => 'required',
            'kelas_id'     => 'required',
            'tanggal'      => 'required|date',
            'status'       => 'required',
        ]);

        Absensi::create($request->all());

        return redirect()->route('admin.absensi.index')
            ->with('success', 'Absensi berhasil ditambahkan!');
    }


    /*
    |--------------------------------------------------------------------------
    | EDIT
    |--------------------------------------------------------------------------
    */
    public function edit($id)
    {
        $absensi = Absensi::findOrFail($id);
        $kelas = Kelas::all();
        $mahasiswa = Mahasiswa::all();

        return view('admin.absensi.edit', compact('absensi', 'kelas', 'mahasiswa'));
    }


    /*
    |--------------------------------------------------------------------------
    | UPDATE
    |--------------------------------------------------------------------------
    */
    public function update(Request $request, $id)
    {
        $request->validate([
            'mahasiswa_id' => 'required',
            'kelas_id'     => 'required',
            'tanggal'      => 'required|date',
            'status'       => 'required',
        ]);

        $absensi = Absensi::findOrFail($id);
        $absensi->update($request->all());

        return redirect()->route('admin.absensi.index')
            ->with('success', 'Absensi berhasil diperbarui!');
    }


    /*
    |--------------------------------------------------------------------------
    | DELETE
    |--------------------------------------------------------------------------
    */
    public function destroy($id)
    {
        Absensi::findOrFail($id)->delete();

        return redirect()->route('admin.absensi.index')
            ->with('success', 'Absensi berhasil dihapus!');
    }
}
