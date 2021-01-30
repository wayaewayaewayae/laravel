<?php

namespace App\Http\Controllers;
use App\Controllers\DB;
use App\Models\Kelurahan;
use App\Models\Rw;
use Illuminate\Http\Request;

class RwController extends Controller
{
    public function index()
    {
 	   $rw = Rw::with('kelurahan')->get();
        return view('rw.index', compact('rw'));
    }
    public function create()
    {
        $kelurahan = Kelurahan::all();
        return view ('rw.create', compact('kelurahan'));
    }
    public function store(Request $request)
    {

    

        $rw = new Rw;
        $rw->id_kelurahan = $request->id_kelurahan;
        $rw->nama = $request->nama_rw;
        $rw->save();
        return redirect()->route('rw.index')->with(['message' => 'Data Rw Berhasil disimpan']);
    }
    public function show($id)
    {
        $rw = Rw::findOrFail($id);
        return view('rw.show', compact('rw'));
    }
    public function edit($id)
    {
        $rw = Rw::findOrFail($id);
        $kelurahan = Kelurahan::all();
        return view('rw.edit', compact('rw', 'kelurahan'))->with(['message' => 'Data Rw Berhasil diedit']);
    }
    public function update(Request $request, $id)
    {
        $rw = Rw::findOrFail($id);
        $rw->id_kelurahan = $request->id_kelurahan;
        $rw->nama = $request->nama_rw;
        $rw->save();
        return redirect()->route('rw.index')->with(['message' => 'Data Rw Berhasil disimpan']);
    }

    public function destroy($id)
    {
        $rw = Rw::findOrFail($id);
        $rw->delete();
        return redirect()->route('rw.index')->with(['message' => 'Data Rw Berhasil diHapus']);
    }
}
