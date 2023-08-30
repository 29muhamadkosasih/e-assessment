<?php

namespace App\Http\Controllers;

use App\Models\Skema;
use App\Imports\SkemaImport;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;
use Maatwebsite\Excel\Facades\Excel;

class SkemaController extends Controller
{
    public function index()
    {
        // abort_if(Gate::denies('skema.index'), Response::HTTP_FORBIDDEN, 'Forbidden');

        $skema = Skema::all();
        return view('pages.master_data.skema.index', [
            'skema'    => $skema
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_skema' => 'required|max:255|min:5|unique:skema',
        ]);
        Skema::create($request->all());
        return redirect()->route('skema.index')->with('success', 'Success ! Data Skema Berhasil di Tambahkan');
    }

    public function edit($id)
    {
        // abort_if(Gate::denies('skema.edit'), Response::HTTP_FORBIDDEN, 'Forbidden');

        $edit = Skema::find($id);
        $skema = Skema::all();
        return view('pages.master_data.skema.index', [
            'edit'   => $edit,
            'skema'    => $skema
        ]);
    }

    public function update(Request $request, $id)
    {
        $bank   = Skema::find($id);
        $this->validate($request, [
            'nama_skema' => 'required|max:255|min:5|unique:skema',
        ]);
        $bank->update([
            'nama_skema'   => $request->nama_skema
        ]);

        return redirect()->route('skema.index')
            ->with('success', 'Success ! Data Skema Berhasil di Update');
    }


    public function destroy($id)
    {
        // abort_if(Gate::denies('skema.delete'), Response::HTTP_FORBIDDEN, 'Forbidden');

        $delete = Skema::find($id);
        $delete->delete();
        return redirect()->route('skema.index')
            ->with('success', 'Success ! Data Skema Berhasil di Hapus');
    }

    public function import(Request $request)
    {
        // dd($request);
        // $fileName = request()->file->getClientOriginalName();
        // dd($fileName);
        // request()->file('file')->storeAs('Skema', $fileName, 'public');
        // Excel::import(new SkemaImport, $request->file);

        $file = $request->file('file');

        Excel::import(
            new SkemaImport,
            $file
        );
        return redirect()->back()->with('success', 'Success ! Data Users Berhasil di Tambahkan');
    }
}