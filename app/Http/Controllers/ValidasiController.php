<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Personaldetail;

class ValidasiController extends Controller
{
    public function index()
    {
        $apl_01 = Personaldetail::all();

        return view('pages.validasi.index', [
            'apl_01'    => $apl_01
        ]);
    }

    public function show($id)
    {
        $show = Personaldetail::find($id);
        return view('pages.validasi.show', [
            'show'   => $show
        ]);
    }
}