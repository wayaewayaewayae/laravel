<?php

namespace App\Http\Controllers;
use App\Controllers\DB;
use App\Models\Provinsi;
use Illuminate\Http\Request;

class ProvinsiController extends Controller
{
    public function index()
    {
       $provinsi = Provinsi::all();
       return view('provinsi.index', compact('provinsi'));
    }
    public function create()
    {
        $provinsi = Provinsi::all();
        return view('provinsi.create' ,compact('provinsi'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'kode_provinsi' => 'required|max:3|unique:provinsis',
            'nama_provinsi' => 'required|unique:provinsis'
        ], [
            'kode_provinsi.required' => 'Kode provinsi tidak boleh Kosong',
            'kode_provinsi.max' => 'Kode maximal 3 karakter',
            'kode_provinsi.unique' => 'Kode provinsi sudah terdaftar',
            'nama_provinsi.required' => 'Nama provinsi tIdak boleh kosong',

        
        ]);

        $provinsi = new Provinsi;
        $provinsi->kode_provinsi = $request->kode_provinsi;
        $provinsi->nama_provinsi = $request->nama_provinsi;
        $provinsi->save();
        return redirect()->route('provinsi.index')->with(['message' => 'Data Provinsi Berhasil disimpan']);
    }
    public function show($id)
    {
        $provinsi = Provinsi::findOrFail($id);
        return view('provinsi.show', compact('provinsi'));
    }
    public function edit($id)
    {
        $provinsi = Provinsi::findOrFail($id);
        return view('provinsi.edit', compact('provinsi'));
    }
    public function update(Request $request, $id)
    {
        $provinsi = Provinsi::findOrFail($id);
        $provinsi->kode_provinsi = $request->kode_provinsi;
        $provinsi->nama_provinsi = $request->nama_provinsi;
        $provinsi->save();
        return redirect()->route('provinsi.index')->with(['message' => 'Data Provinsi Berhasil diedit']);
    }

    public function destroy($id)
    {
        $provinsi = Provinsi::findOrFail($id);
        $provinsi->delete();
        return redirect()->route('provinsi.index')->with(['message' => 'Data provinsi Berhasil dihapus']);
    }
}
