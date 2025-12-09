<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pembayaran;
use App\Models\User;

class PembayaranController extends Controller
{
    public function index()
    {
        $pembayaran = Pembayaran::with('user')->get();
        return view('admin.pembayaran.index', compact('pembayaran'));
    }

    public function create()
    {
        $users = User::all();
        return view('admin.pembayaran.create', compact('users'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required',
            'jumlah' => 'required|numeric',
            'status' => 'required',
        ]);

        Pembayaran::create($request->all());

        return redirect()->route('admin.pembayaran.index')
            ->with('success', 'Pembayaran berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $pembayaran = Pembayaran::findOrFail($id);
        $users = User::all();
        return view('admin.pembayaran.edit', compact('pembayaran', 'users'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'user_id' => 'required',
            'jumlah' => 'required|numeric',
            'status' => 'required',
        ]);

        $pembayaran = Pembayaran::findOrFail($id);
        $pembayaran->update($request->all());

        return redirect()->route('admin.pembayaran.index')
            ->with('success', 'Pembayaran berhasil diperbarui.');
    }

    public function destroy($id)
    {
        Pembayaran::destroy($id);

        return redirect()->route('admin.pembayaran.index')
            ->with('success', 'Pembayaran berhasil dihapus.');
    }
}
