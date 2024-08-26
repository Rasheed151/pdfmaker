<?php

namespace App\Http\Controllers;

use App\Models\liblary;
use App\Models\Simpan;
use Illuminate\Http\Request;
use PharIo\Manifest\Library;

class simpanController extends Controller
{
    public function index()
    {
        $simpans = Simpan::all();
        return view('simpan.index', compact('simpans'));
    }

    public function create()
{
    $libraryData = liblary::all(); // Pastikan nama variabel konsisten
    return view('simpan.create', compact('libraryData'));
}


    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string',
            'kelas' => 'required|string',
            'umur' => 'required|string',
            'jenis_kelamin' => 'required|string',
            'no_hp' => 'required|string',
            'email' => 'required|email',
        ]);

        Simpan::create($request->all());

        return redirect()->route('simpan.index');
    }

    public function show(Simpan $simpan)
    {
        return view('simpan.show', compact('simpan'));
    }

    public function edit(Simpan $simpan)
    {
        return view('simpan.edit', compact('simpan'));
    }

    public function update(Request $request, Simpan $simpan)
    {
        $request->validate([
            'nama' => 'required|string',
            'kelas' => 'required|string',
            'umur' => 'required|string',
            'jenis_kelamin' => 'required|string',
            'no_hp' => 'required|string',
            'email' => 'required|email',
        ]);

        $simpan->update($request->all());

        return redirect()->route('simpan.index');
    }

    public function destroy(Simpan $simpan)
    {
        $simpan->delete();

        return redirect()->route('simpan.index');
    }
}
