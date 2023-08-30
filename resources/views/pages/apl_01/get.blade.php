@extends('layouts/master')

@section('title', 'apl_01')

@section('content')
<div class="row invoice-preview">

    @foreach ($datas as $item)

    <!-- Invoice -->
    <div class="col-xl-9 col-md-8 col-12 mb-md-0 mb-4">
        <div class="card invoice-preview-card">
            <div class="card-body">
                <div
                    class="d-flex justify-content-between flex-xl-row flex-md-column flex-sm-row flex-column m-sm-3 m-0">
                    <div class="mb-xl-0 mb-2">
                        <div class="d-flex svg-illustration mb-4 gap-2 align-items-center">
                            <img src="https://sisfo.bnsp.go.id/images/K8cRm4d6SGTrLQXefW3ON0JsIYM5ioPH.png"
                                width="80" />
                        </div>
                    </div>
                    <div>
                        <h4 class="fw-semibold mb-2">Pendaftaran #{{ $item->no_pendaftaran }}</h4>
                        <div class="mb-2 pt-1">
                            <span>Tanggal Pendaftaran</span>
                            <span class="fw-semibold">: &nbsp; {{ \Carbon\Carbon::parse($item->created_at)->format('d M
                                Y')
                                }}</span>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="my-0">
            <div class="card-body">
                <div class="row p-sm-3 p-0">
                    <div class="col-xl-6 col-md-12 col-sm-5 col-12 mb-xl-0 mb-md-4 mb-sm-0 mb-4">
                        <h6 class="mb-4">Data Pribadi</h6>
                        <table>
                            <tbody>
                                <tr>
                                    <td class="pe-4">Nama Lengkap</td>
                                    <td>{{ $item->nama_lengkap->name }}</td>
                                </tr>
                                <tr>
                                    <td class="pe-4">Tempat/Tanggal Lahir</td>
                                    <td>{{ $item->tempat_lahir }},
                                        {{\Carbon\Carbon::parse($item->tanggal_lahir)->format('d M Y')}} </td>
                                </tr>
                                <tr>
                                    <td class="pe-4">Jenis Kelamin</td>
                                    <td>{{ $item->jenis_kelamin }}</td>
                                </tr>
                                <tr>
                                    <td class="pe-4">Kebangsaan</td>
                                    <td>{{ $item->kebangsaan }}</td>
                                </tr>
                                <tr>
                                    <td class="pe-4">Alamat</td>
                                    <td>{{$item->alamat}}</td>
                                </tr>
                                <tr>
                                    <td class="pe-4">No. Telefon</td>
                                    <td>{{ $item->no_hp }}</td>
                                </tr>
                                <tr>
                                    <td class="pe-4">Email</td>
                                    <td>{{ $item->email->email }}</td>
                                </tr>
                                <tr>
                                    <td class="pe-4">Pendidikan Terakhir</td>
                                    <td>{{ $item->pendidikan_terakhir }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-xl-6 col-md-12 col-sm-7 col-12">
                        <h6 class="mb-4">Data Pekerjaan Sekarang</h6>
                        <table>
                            <tbody>
                                <tr>
                                    <td class="pe-4">Nama Perusahaan</td>
                                    <td>{{ $item->nama_perusahaan }}</td>
                                </tr>
                                <tr>
                                    <td class="pe-4">Jabatan</td>
                                    <td>{{ $item->jabatan }}</td>
                                </tr>
                                <tr>
                                    <td class="pe-4">Alamat</td>
                                    <td>{{ $item->alamat_perusahaan }}</td>
                                </tr>
                                <tr>
                                    <td class="pe-4">No. Telefon</td>
                                    <td>{{ $item->no_hp_perusahaan }}</td>
                                </tr>
                                <tr>
                                    <td class="pe-4">Email</td>
                                    <td>{{ $item->email_perusahaan }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Invoice -->

    <!-- Invoice Actions -->
    <div class="col-xl-3 col-md-4 col-12 invoice-actions">
        <div class="card">
            <div class="card-body">
                <button class="btn btn-primary d-grid w-100 mb-2 waves-effect waves-light" data-bs-toggle="offcanvas"
                    data-bs-target="#sendInvoiceOffcanvas">
                    <span class="d-flex align-items-center justify-content-center text-nowrap"><i
                            class="ti ti-send ti-xs me-1"></i>Send Invoice</span>
                </button>
                <a class="btn btn-label-secondary d-grid w-100 mb-2 waves-effect" target="_blank"
                    href="{{ url('cetak_pdf', $item->id) }}">
                    Print
                </a>
                <a href="./app-invoice-edit.html" class="btn btn-label-secondary d-grid w-100 mb-2 waves-effect">
                    Edit Invoice
                </a>
                <button class="btn btn-primary d-grid w-100 waves-effect waves-light" data-bs-toggle="offcanvas"
                    data-bs-target="#addPaymentOffcanvas">
                    <span class="d-flex align-items-center justify-content-center text-nowrap"><i
                            class="ti ti-currency-dollar ti-xs me-1"></i>Add Payment</span>
                </button>
            </div>
        </div>
    </div>
    <!-- /Invoice Actions -->
    @endforeach
</div>
@endsection
