<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Murid;
use Illuminate\Http\Request;

class GuruController extends Controller
{
    public function index()
    {
        $guru = Guru::with('murid')->get();
        return view('guru.index', ['guru' => $guru]);
    }

    public function create()
    {
        $murid = Murid::all();
        return view('guru.create', compact('murid'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nip' => 'required|unique:gurus',
            'nama' => 'required',
            'mapel' => 'required',
            'id_murid' => 'required',
        ]);

        $guru = new Guru();
        $guru->nip = $request->nip;
        $guru->nama = $request->nama;
        $guru->mapel = $request->mapel;
        $guru->id_murid = $request->id_murid;
        $guru->save();
        return redirect()->route('guru.index')
            ->with('success', 'Data berhasil dibuat!');
    }

    public function show($id)
    {
        $guru = Guru::findOrFail($id);
        return view('guru.show', compact('guru'));
    }

    public function edit($id)
    {
        $guru = Guru::findOrFail($id);
        $murid = Murid::all();
        return view('guru.edit', compact('guru', 'murid'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nip' => 'required|unique:gurus',
            'nama' => 'required',
            'mapel' => 'required',
            'id_murid' => 'required',
        ]);

        $guru = new Guru();
        $guru->nip = $request->nip;
        $guru->nama = $request->nama;
        $guru->mapel = $request->mapel;
        $guru->id_murid = $request->id_murid;
        $guru->save();
        return redirect()->route('guru.index')
            ->with('success', 'Data berhasil dibuat!');
    }

    public function destroy($id)
    {
        $guru = Guru::findOrFail($id);
        $guru->delete();
        return redirect()->route('guru.index')
            ->with('success', 'Data berhasil dihapus!');
    }
}

?>