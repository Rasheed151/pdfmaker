<?php
namespace App\Http\Controllers;

use App\Models\Simpan;
use App\Models\Ambil;
use Illuminate\Http\Request;

class ambilController extends Controller
{
    // Tampilkan semua data dari tabel ambil
    public function index()
    {
        $ambils = Ambil::all();
        return view('ambil.index', compact('ambils'));
    }

    // Tampilkan form untuk membuat data baru
    public function create()
    {
        $simpanData = Simpan::all();
        return view('ambil.create', compact('simpanData'));
    }

    // Simpan data baru ke tabel ambil
    // app/Http/Controllers/ambilController.php

public function store(Request $request)
{
    // Validasi input
    $request->validate([
        'nama' => 'required',
        'jabatan' => 'required',
        'jenis_combined' => 'required', // Tambahkan validasi untuk field gabungan
    ]);

    // Cari data dari tabel simpan berdasarkan nama
    $simpanData = Simpan::where('nama', $request->nama)->first();

    if ($simpanData) {
        // Buat data baru di tabel ambil dengan data dari simpan
        Ambil::create([
            'nama' => $simpanData->nama,
            'kelas' => $simpanData->kelas,
            'umur' => $simpanData->umur,
            'jenis_kelamin' => $simpanData->jenis_kelamin,
            'jenis' => $request->jenis_combined, // Gunakan data gabungan
            'jabatan' => $request->jabatan, // Ini diisi manual
        ]);

        return redirect()->route('ambil.index')->with('success', 'Data berhasil disimpan!');
    } else {
        return redirect()->route('ambil.index')->with('error', 'Data nama tidak ditemukan di tabel simpan.');
    }
}


    // Tampilkan detail data berdasarkan id
    public function show($id)
    {
        $ambil = Ambil::findOrFail($id);
        return view('ambil.show', compact('ambil'));
    }

    // Tampilkan form untuk mengedit data
    public function edit($id)
    {
        $ambil = Ambil::findOrFail($id);
        return view('ambil.edit', compact('ambil'));
    }

    // Update data yang sudah ada di tabel ambil
    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'jabatan' => 'required',
        ]);

        // Ambil data yang ingin diupdate
        $ambil = Ambil::findOrFail($id);

        // Update data dengan informasi baru
        $ambil->update([
            'jabatan' => $request->jabatan,
            // Kolom lain tidak perlu diubah karena berasal dari tabel simpan
        ]);

        return redirect()->route('ambil.index')->with('success', 'Data berhasil diupdate!');
    }

    // Hapus data dari tabel ambil
    public function destroy($id)
    {
        $ambil = Ambil::findOrFail($id);
        $ambil->delete();

        return redirect()->route('ambil.index')->with('success', 'Data berhasil dihapus!');
    }
}
