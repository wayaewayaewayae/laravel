<?php

namespace App\Http\Controllers;

use App\Models\rw;
use App\Models\desa;
use Illuminate\Http\Request;

class RwController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $rw = rw::with('desa')->get();
        return view('admin.rw.index', compact('rw'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $rw = Desa::all();
        return view('admin.rw.create', compact('rw'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'no_rw' => 'required|unique:rws'
        ], [
            'no_rw.required' => 'No rw tidak boleh kosong',
            'no_rw.unique' => 'No rw sudah terdaftar'
        ]);
        $rw = new Rw();
        $rw->id_desa = $request->id_desa;
        $rw->no_rw = $request->no_rw;
        $rw->save();
        return redirect()->route('rw.index')
            ->with(['success'=>'Data <b>', $rw->no_rw, 
            '</b> Berhasil di input']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\rw  $rw
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $rw = Rw::findOrFail($id);
        return view('admin.rw.show', compact('rw'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\rw  $rw
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $desa = Desa::all();
        $rw = rw::findOrFail($id);
        return view('admin.rw.edit', compact('rw', 'desa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\rw  $rw
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'no_rw' => 'required|unique:rws'
        ], [
            'no_rw.required' => 'No rw tidak boleh kosong',
            'no_rw.unique' => 'No rw sudah terdaftar'
        ]);
        $rw = Rw::findOrFail($id);
        $rw->id_desa = $request->id_desa;
        $rw->no_rw = $request->no_rw;
        $rw->save();
        return redirect()->route('rw.index')
            ->with(['success'=>'Data <b>', $rw->no_rw, 
            '</b> Berhasil di edit']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\rw  $rw
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $rw = Rw::findOrFail($id);
        $rw->delete();
        return redirect()->route('rw.index')
            ->with(['success'=>'Data <b>', $rw->no_rw, 
            '</b> Berhasil di hapus']);
    }
}
