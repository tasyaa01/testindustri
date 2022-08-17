<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Murid;

class MuridController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $murid = Murid::all();
        return view('murid.index', compact('murid'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('murid.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validasi
        $validated = $request->validate([
            'nis' => 'required|unique:murids|max:255',
            'nama' => 'required',
            'kelas' => 'required',
            'jurusan' => 'required',

        ]);

        $murid = new Murid();
        $murid->nis = $request->nis;
        $murid->nama = $request->nama;
        $murid->kelas = $request->kelas;
        $murid->jurusan = $request->jurusan;
        $murid->save();
        return redirect()->route('murid.index')
            ->with('success', 'Data berhasil dibuat!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $murid = Murid::findOrFail($id);
        return view('murid.show', compact('murid'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $murid = Murid::findOrFail($id);
        return view('murid.edit', compact('murid'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //validasi
        $validated = $request->validate([
            'nis' => 'required|unique:murids|max:255',
            'nama' => 'required',
            'kelas' => 'required',
            'jurusan' => 'required',

        ]);

        $murid = new Murid();
        $murid->nis = $request->nis;
        $murid->nama = $request->nama;
        $murid->kelas = $request->kelas;
        $murid->jurusan = $request->jurusan;
        $murid->save();
        return redirect()->route('murid.index')
            ->with('success', 'Data berhasil dibuat!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $murid = Murid::findOrFail($id);
        $murid->delete();
        return redirect()->route('murid.index')
            ->with('success', 'Data berhasil dihapus!');
    }
}

?>