<?php

namespace App\Http\Controllers;

use App\Models\Kompetensi;
use App\Models\Skema;
use Illuminate\Http\Request;

class KompetensiController extends Controller
{
    public function index()
    {
        $kompetensi = Kompetensi::all();
        return view('pages.master_data.kompetensi.index', [
            'kompetensi'   => $kompetensi
        ]);
    }

    public function create()
    {
        $nama_skema = Skema::all();
        return view('pages.master_data.kompetensi.create', [
            'nama_skema'  => $nama_skema
        ]);
    }

    public function store(Request $request)
    {
        // dd($request);
        $request->validate([
            'nama_skema_id'     => 'required|numeric',
            'no_skkni'          => 'required',
            'kode'              => 'required',
            'unit_kompetensi'   => 'required',
            'element_kompetensi' => 'required',
            'kuk'               => 'required',
        ]);
        Kompetensi::create($request->all());
        return redirect()->route('kompetensi.index')->with(
            'success',
            'Success ! Data Kompetensi Berhasil di Tambahkan'
        );
    }

    public function show($id)
    {
        $show = Kompetensi::find($id);
        return view('pages.master_data.kompetensi.show', [
            'show'   => $show
        ]);
    }

    public function destroy($id)
    {

        $delete = Kompetensi::find($id);
        $delete->delete();
        return redirect()->route('kompetensi.index')
            ->with('success', 'Success ! Data Kompetensi Berhasil di Hapus');
    }

    public function edit($id)
    {
        $nama_skema = Skema::all();
        $edit = Kompetensi::find($id);
        $kompetensi = Kompetensi::all();
        return view('pages.master_data.kompetensi.edit', [
            'edit'          => $edit,
            'kompetensi'    => $kompetensi,
            'nama_skema'    => $nama_skema,
        ]);
    }

    public function update(Request $request, $id)
    {
        $kompetensi   = Kompetensi::find($id);
        $this->validate($request, [
            'nama_skema_id'     => 'required|numeric',
            'no_skkni'          => 'required',
            'kode'              => 'required',
            'unit_kompetensi'   => 'required',
            'element_kompetensi' => 'required',
            'kuk'               => 'required',
        ]);
        $kompetensi->update([
            'nama_skema_id'         => $request->nama_skema_id,
            'kode'                  => $request->kode,
            'kode2'                 => $request->kode2,
            'kode3'                 => $request->kode3,
            'kode4'                 => $request->kode4,
            'kode5'                 => $request->kode5,
            'kode6'                 => $request->kode6,
            'kode7'                 => $request->kode7,
            'kode8'                 => $request->kode8,
            'kode9'                 => $request->kode9,
            'kode10'                => $request->kode10,
            'unit_kompetensi'       => $request->unit_kompetensi,
            'unit_kompetensi2'      => $request->unit_kompetensi2,
            'unit_kompetensi3'      => $request->unit_kompetensi3,
            'unit_kompetensi4'      => $request->unit_kompetensi4,
            'unit_kompetensi5'      => $request->unit_kompetensi5,
            'unit_kompetensi6'      => $request->unit_kompetensi6,
            'unit_kompetensi7'      => $request->unit_kompetensi7,
            'unit_kompetensi8'      => $request->unit_kompetensi8,
            'unit_kompetensi9'      => $request->unit_kompetensi9,
            'unit_kompetensi10'     => $request->unit_kompetensi10,
            'element_kompetensi'    => $request->element_kompetensi,
            'element_kompetensi2'   => $request->element_kompetensi2,
            'element_kompetensi3'   => $request->element_kompetensi3,
            'element_kompetensi4'   => $request->element_kompetensi4,
            'element_kompetensi5'   => $request->element_kompetensi5,
            'element_kompetensi6'   => $request->element_kompetensi6,
            'element_kompetensi7'   => $request->element_kompetensi7,
            'element_kompetensi8'   => $request->element_kompetensi8,
            'element_kompetensi9'   => $request->element_kompetensi9,
            'element_kompetensi10'  => $request->element_kompetensi10,
            'kuk'                   => $request->kuk,
            'kuk2'                  => $request->kuk2,
            'kuk3'                  => $request->kuk3,
            'kuk4'                  => $request->kuk4,
            'kuk5'                  => $request->kuk5,
            'kuk6'                  => $request->kuk6,
            'kuk7'                  => $request->kuk7,
            'kuk8'                  => $request->kuk8,
            'kuk9'                  => $request->kuk9,
            'kuk10'                 => $request->kuk10,
        ]);
        return redirect()->route('kompetensi.index')
            ->with('success', 'Success ! Data Kompetensi Berhasil di Update');
    }
}