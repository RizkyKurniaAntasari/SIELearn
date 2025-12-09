<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Materi;
use App\Models\Kelas;
use App\Models\User;
use Illuminate\Http\Request;

class MateriController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->search;
        $kelasFilter = $request->kelas_id;

        $materi = Materi::with(['kelas', 'dosen'])
            ->when($search, function ($q) use ($search) {
                $q->where('judul', 'like', "%$search%");
            })
            ->when($kelasFilter, function ($q) use ($kelasFilter) {
                $q->where('kelas_id', $kelasFilter);
            })
            ->latest()
            ->paginate(10);

        $kelas = Kelas::all();
        $dosen = User::where('role', 'dosen')->get();

        return view('admin.materi.index', compact('materi', 'kelas', 'dosen'));
    }

    public function create()
    {
        $kelas = Kelas::all();
        $dosen = User::where('role', 'dosen')->get();

        return view('admin.materi.create', compact('kelas', 'dosen'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'deskripsi' => 'nullable',
            'file' => 'nullable|mimes:pdf,doc,docx,ppt,pptx',
            'kelas_id' => 'required',
            'dosen_id' => 'required',
        ]);

        $fileName = null;

        if ($request->hasFile('file')) {
            $fileName = time() . '-' . $request->file->getClientOriginalName();
            $request->file->move(public_path('materi'), $fileName);
        }

        Materi::create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'file' => $fileName,
            'kelas_id' => $request->kelas_id,
            'dosen_id' => $request->dosen_id,
        ]);

        return redirect()->route('admin.materi.index')->with('success', 'Materi berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $materi = Materi::findOrFail($id);
        $kelas = Kelas::all();
        $dosen = User::where('role', 'dosen')->get();

        return view('admin.materi.edit', compact('materi', 'kelas', 'dosen'));
    }

    public function update(Request $request, $id)
    {
        $materi = Materi::findOrFail($id);

        $request->validate([
            'judul' => 'required',
            'deskripsi' => 'nullable',
            'file' => 'nullable|mimes:pdf,doc,docx,ppt,pptx',
            'kelas_id' => 'required',
            'dosen_id' => 'required',
        ]);

        $fileName = $materi->file;

        if ($request->hasFile('file')) {
            if ($fileName && file_exists(public_path('materi/' . $fileName))) {
                unlink(public_path('materi/' . $fileName));
            }

            $fileName = time() . '-' . $request->file->getClientOriginalName();
            $request->file->move(public_path('materi'), $fileName);
        }

        $materi->update([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'file' => $fileName,
            'kelas_id' => $request->kelas_id,
            'dosen_id' => $request->dosen_id,
        ]);

        return redirect()->route('admin.materi.index')->with('success', 'Materi berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $materi = Materi::findOrFail($id);

        if ($materi->file && file_exists(public_path('materi/' . $materi->file))) {
            unlink(public_path('materi/' . $materi->file));
        }

        $materi->delete();

        return redirect()->route('admin.materi.index')->with('success', 'Materi berhasil dihapus.');
    }
}
