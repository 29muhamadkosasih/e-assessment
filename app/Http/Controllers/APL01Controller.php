<?php

namespace App\Http\Controllers;

use PDF;
use TCPDF;
use App\Models\Bank;
use App\Models\APL01;
use App\Models\Kompetensi;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Personaldetail;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class APL01Controller extends Controller
{
    public function index()
    {
        $apl_01 = Personaldetail::all();

        return view('pages.apl_01.index', [
            'apl_01'    => $apl_01
        ]);
    }

    public function create()
    {
        $kompetensi = Kompetensi::all();
        return view('pages.apl_01.create', [
            'kompetensi'  => $kompetensi
        ]);
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $userId = auth()->id();
        $username = Auth::user()->name;
        $request->validate([
            'jabatan' => 'required',
        ]);

        $documentNumber = $username;
        $data2 = $request->ijazah;
        if ($data2 == NULL) {
            $filename1 = 0;
        } else {
            if ($request->hasFile('ijazah')) {
                $this->validate($request, [
                    'ijazah'          => 'mimes:jpeg,png,jpg,gif,pdf|max:15048',
                ]);
                $file               = $request->file('ijazah');
                $temp               = str_replace('/', '_', $documentNumber);
                $filename1          = 'Ijazah-' . $temp . '.' . $file->getClientOriginalExtension();
                $destinationPath    = 'storage/Ijazah';
                $file->move($destinationPath, $filename1);
            }
        }


        $data3 = $request->surat_keterangan_perusahaan;
        if ($data3 == NULL) {
            $filename2 = 0;
        } else {
            if ($request->hasFile('surat_keterangan_perusahaan')) {
                $this->validate($request, [
                    'surat_keterangan_perusahaan'          => 'mimes:jpeg,png,jpg,gif,pdf|max:15048',
                ]);
                $file               = $request->file('surat_keterangan_perusahaan');
                $temp               = str_replace('/', '_', $documentNumber);
                $filename2         = 'Surat-Keterangan-Perusahaan-' . $temp . '.' . $file->getClientOriginalExtension();
                $destinationPath    = 'storage/Surat-Keterangan-Perusahaan';
                $file->move($destinationPath, $filename2);
            }
        }

        $data4 = $request->cv;
        if ($data4 == NULL) {
            $filename3 = 0;
        } else {
            if ($request->hasFile('cv')) {
                $this->validate($request, [
                    'cv'          => 'mimes:jpeg,png,jpg,gif,pdf|max:15048',
                ]);
                $file               = $request->file('cv');
                $temp               = str_replace('/', '_', $documentNumber);
                $filename3          = 'CV-' . $temp . '.' . $file->getClientOriginalExtension();
                $destinationPath    = 'CV';
                $file->move($destinationPath, $filename3);
            }
        }

        $data5 = $request->sertifikat_pendukung;
        if ($data5 == NULL) {
            $filename4 = 0;
        } else {
            if ($request->hasFile('sertifikat_pendukung')) {
                $this->validate($request, [
                    'sertifikat_pendukung'          => 'mimes:jpeg,png,jpg,gif,pdf|max:15048',
                ]);
                $file               = $request->file('sertifikat_pendukung');
                $temp               = str_replace('/', '_', $documentNumber);
                $filename4          = 'Sertifikat-Pendukung-' . $temp . '.' . $file->getClientOriginalExtension();
                $destinationPath    = 'storage/Sertifikat-Pendukung';
                $file->move($destinationPath, $filename4);
            }
        }

        $data6 = $request->p_cbt;
        if ($data6 == NULL) {
            $filename5 = 0;
        } else {
            if ($request->hasFile('p_cbt')) {
                $this->validate($request, [
                    'p_cbt'          => 'mimes:jpeg,png,jpg,gif,pdf|max:15048',
                ]);
                $file               = $request->file('p_cbt');
                $temp               = str_replace('/', '_', $documentNumber);
                $filename5          = 'Sertifikat-Pelatihan-CBT-' . $temp . '.' . $file->getClientOriginalExtension();
                $destinationPath    = 'storage/Pelatihan-CBT';
                $file->move($destinationPath, $filename5);
            }
        }

        $data7 = $request->ktp;
        if ($data7 == NULL) {
            $filename6 = 0;
        } else {
            if ($request->hasFile('ktp')) {
                $this->validate($request, [
                    'ktp'          => 'mimes:jpeg,png,jpg,gif,pdf|max:15048',
                ]);
                $file               = $request->file('ktp');
                $temp               = str_replace('/', '_', $documentNumber);
                $filename6          = 'KTP-' . $temp . '.' . $file->getClientOriginalExtension();
                $destinationPath    = 'storage/KTP';
                $file->move($destinationPath, $filename6);
            }
        }

        $data8 = $request->ttd;
        if ($data8 == NULL) {
            $filename7 = 0;
        } else {
            if ($request->hasFile('ttd')) {
                $this->validate($request, [
                    'ttd'          => 'mimes:jpeg,png,jpg,gif,pdf|max:15048',
                ]);
                $file               = $request->file('ttd');
                $temp               = str_replace('/', '_', $documentNumber);
                $filename7          = 'Tanda-Tangan-' . $temp . '.' . $file->getClientOriginalExtension();
                $destinationPath    = 'storage/Tanda-Tangan';
                $file->move($destinationPath, $filename7);
            }
        }

        $order = new Personaldetail();
        $order->no_pendaftaran = Personaldetail::generateInvoiceNumber();
        $order->nama_lengkap_id = $userId;
        $order->email_id = $userId;
        $order->tempat_lahir = $request->tempat_lahir;
        $order->tanggal_lahir = $request->tanggal_lahir;
        $order->kebangsaan = $request->kebangsaan;
        $order->jenis_kelamin = $request->jenis_kelamin;
        $order->alamat = $request->alamat;
        $order->no_hp = $request->no_hp;
        $order->pendidikan_terakhir = $request->pendidikan_terakhir;
        $order->nama_perusahaan = $request->nama_perusahaan;
        $order->jabatan = $request->jabatan;
        $order->no_hp_perusahaan = $request->no_hp_perusahaan;
        $order->email_perusahaan = $request->email_perusahaan;
        $order->alamat_perusahaan = $request->alamat_perusahaan;
        $order->ijazah = $filename1;
        $order->surat_keterangan_perusahaan = $filename2;
        $order->cv = $filename3;
        $order->sertifikat_pendukung = $filename4;
        $order->p_cbt = $filename5;
        $order->ktp = $filename6;
        $order->ttd = $filename7;
        $order->kompetensi_id = $request->kompetensi_id;
        $order->save();
        return redirect()->route('get.apl_01')->with('success', 'Success ! Data Bank Berhasil di Tambahkan');
    }

    public function edit($id)
    {
        // abort_if(Gate::denies('apl_01.edit'), Response::HTTP_FORBIDDEN, 'Forbidden');

        $edit = Bank::find($id);
        $bank = Bank::all();
        return view('pages.apl_01.edit', [
            'edit'   => $edit,
            'bank'    => $bank
        ]);
    }

    public function update(Request $request, $id)
    {
        $bank   = Bank::find($id);
        $this->validate($request, [
            'nama_bank' => 'required|max:255|min:5|unique:bank',
        ]);
        $bank->update([
            'nama_bank'   => $request->nama_bank
        ]);

        return redirect()->route('apl_01.index')
            ->with('success', 'Success ! Data Bank Berhasil di Update');
    }


    public function destroy($id)
    {
        // abort_if(Gate::denies('apl_01.delete'), Response::HTTP_FORBIDDEN, 'Forbidden');

        $delete = Personaldetail::find($id);
        $delete->delete();
        return redirect()->route('apl_01.index')
            ->with('success', 'Success ! Data Bank Berhasil di Hapus');
    }

    public function pdf()
    {
        $userId = auth()->user()->id;
        $datas = Personaldetail::where('nama_lengkap_id', $userId)
            ->latest()
            ->limit(1)
            ->get();
        $pdf = PDF::loadview('pages.apl_01.print', [
            'datas' => $datas
        ]);
        $pdf->set_paper('letter', 'potrait');
        return $pdf->stream('laporan-request-fund.pdf');
    }
 
    public function get()
    {
        $userId = auth()->user()->id;
        // dd()
        $datas = Personaldetail::where('nama_lengkap_id', $userId)
            ->latest()
            ->limit(1)
            ->get();
        // dd($datas);
        return view('pages.apl_01.get', [
            'datas' => $datas
        ]);


        // $pdf = new TCPDF();
        // $pdf->AddPage();
        // $pdf->writeHTML(view('pages.apl_01.get', [
        //     'datas' => $datas

        // ])->render(), true, false, true, false, '');
        // $pdf->Output('pdf_view.pdf', 'D');
    }
}