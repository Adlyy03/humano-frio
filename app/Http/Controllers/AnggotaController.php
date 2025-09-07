<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AnggotaController extends Controller
{
    // tampil semua anggota di dashboard admin
    public function index()
    {
        $anggotas = Anggota::all();
        return view('admin.dashboard', compact('anggotas'));
    }

    // form tambah anggota
    public function create()
    {
        return view('anggota.create'); // pastikan folder admin
    }

    // simpan anggota baru
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'role' => 'required|string|max:255',
            'jabatan' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png,gif,webp|max:2048',
        ]);

        $data = $request->only(['nama', 'role', 'jabatan', 'email']);

        // upload foto jika ada
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $path = $file->store('anggota', 'public');
            $data['foto'] = '/storage/' . $path;
        }

        Anggota::create($data);

        return redirect()->route('admin.dashboard')->with('success', 'Anggota berhasil ditambahkan');
    }

    // form edit anggota
    public function edit($id)
    {
        $anggota = Anggota::findOrFail($id);
        return view('anggota.edit', compact('anggota'));
    }

    // update anggota
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'role' => 'required|string|max:255',
            'jabatan' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png,gif,webp|max:2048',
        ]);

        $anggota = Anggota::findOrFail($id);
        $data = $request->only(['nama', 'role', 'jabatan', 'email']);

        // upload foto baru jika ada
        if ($request->hasFile('foto')) {
            // hapus foto lama
            if ($anggota->foto && file_exists(public_path($anggota->foto))) {
                unlink(public_path($anggota->foto));
            }
            $file = $request->file('foto');
            $path = $file->store('anggota', 'public');
            $data['foto'] = '/storage/' . $path;
        }

        $anggota->update($data);

        return redirect()->route('admin.dashboard')->with('success', 'Anggota berhasil diupdate');
    }

    // hapus anggota
    public function destroy($id)
    {
        $anggota = Anggota::findOrFail($id);

        if ($anggota->foto && file_exists(public_path($anggota->foto))) {
            unlink(public_path($anggota->foto));
        }

        $anggota->delete();

        return redirect()->route('admin.dashboard')->with('success', 'Anggota berhasil dihapus');
    }
}
