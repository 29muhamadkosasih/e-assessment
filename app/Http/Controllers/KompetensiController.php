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
}
