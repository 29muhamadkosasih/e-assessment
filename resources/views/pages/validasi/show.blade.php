@extends('layouts/master')

@section('title', 'Users')

@section('content')
<!-- Invoice -->
<div class="col-xl-12 col-md-12 col-12 mb-3">
    <div class="card invoice-preview-card">
        <div class="card-body">
            <div class="d-flex justify-content-between flex-xl-row flex-md-column flex-sm-row flex-column m-sm-3 m-0">
                <div class="mb-xl-0 mb-2">
                    <div class="d-flex svg-illustration mb-4 gap-2 align-show->center">
                        <img src="https://sisfo.bnsp.go.id/images/K8cRm4d6SGTrLQXefW3ON0JsIYM5ioPH.png" width="80" />
                    </div>
                </div>
                <div>
                    <h4 class="fw-semibold mb-2">Pendaftaran #{{ $show->no_pendaftaran }}</h4>
                    <div class="mb-2 pt-1">
                        <span>Tanggal Pendaftaran</span>
                        <span class="fw-semibold">: &nbsp; {{ \Carbon\Carbon::parse($show->created_at)->format('d M
                            Y')
                            }}</span>
                    </div>
                </div>
            </div>
        </div>
        <hr class="my-0">
        <div class="card-body">
            <div class="row p-sm-3 p-0">
                <div class="col-xl-6 col-md-12 col-sm-5 col-12 mb-xl-0 mb-3">
                    <h5 class="mb-4">Data Pribadi</h5>
                    <table>
                        <tbody>
                            <tr>
                                <td class="pe-4">Nama Lengkap</td>
                                <td>{{ $show->nama_lengkap->name }}</td>
                            </tr>
                            <tr>
                                <td class="pe-4">Tempat/Tanggal Lahir</td>
                                <td>{{ $show->tempat_lahir }},
                                    {{\Carbon\Carbon::parse($show->tanggal_lahir)->format('d M Y')}} </td>
                            </tr>
                            <tr>
                                <td class="pe-4">Jenis Kelamin</td>
                                <td>{{ $show->jenis_kelamin }}</td>
                            </tr>
                            <tr>
                                <td class="pe-4">Kebangsaan</td>
                                <td>{{ $show->kebangsaan }}</td>
                            </tr>
                            <tr>
                                <td class="pe-4">Alamat</td>
                                <td>{{$show->alamat}}</td>
                            </tr>
                            <tr>
                                <td class="pe-4">No. Telefon</td>
                                <td>{{ $show->no_hp }}</td>
                            </tr>
                            <tr>
                                <td class="pe-4">Email</td>
                                <td>{{ $show->email->email }}</td>
                            </tr>
                            <tr>
                                <td class="pe-4">Pendidikan Terakhir</td>
                                <td>{{ $show->pendidikan_terakhir }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-xl-6 col-md-12 col-sm-7 col-12">
                    <h5 class="mb-4">Data Pekerjaan Sekarang</h5>
                    <table>
                        <tbody>
                            <tr>
                                <td class="pe-4">Nama Perusahaan</td>
                                <td>{{ $show->nama_perusahaan }}</td>
                            </tr>
                            <tr>
                                <td class="pe-4">Jabatan</td>
                                <td>{{ $show->jabatan }}</td>
                            </tr>
                            <tr>
                                <td class="pe-4">Alamat</td>
                                <td>{{ $show->alamat_perusahaan }}</td>
                            </tr>
                            <tr>
                                <td class="pe-4">No. Telefon</td>
                                <td>{{ $show->no_hp_perusahaan }}</td>
                            </tr>
                            <tr>
                                <td class="pe-4">Email</td>
                                <td>{{ $show->email_perusahaan }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <h5 class="mb-3 mt-3">Unit Kompetensi</h5>
                <div class="table-responsive d-flex justify-content-center">
                    <table class="table table-bordered mt-3" border="1" id="ping">
                        <thead>
                            <tr>
                                <th colspan="2" rowspan="2" class="text-start">Nama Sertifikasi Okupasi
                                </th>
                                <th style="text-align: start">Judul</th>
                                <th style="text-align: center">:</th>
                                <th colspan="5" style="text-align: center">{{ $show->kompetensi->skema->nama_skema }}
                                </th>
                            </tr>
                            </tr>
                            <tr>
                                <th>Nomor</th>
                                <th>:</th>
                                <th colspan="5">{{ $show->kompetensi->skema->no }}</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            <tr>
                                <th colspan="3">Tujuan Assessment</th>
                                <th>:</th>
                                <th>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="disabledCheck1"
                                            disabled="">
                                        Sertifikasi
                                    </div>
                                </th>
                                <th>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="disabledCheck1"
                                            disabled="">
                                        RCC
                                    </div>
                                </th>
                                <th>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="disabledCheck1"
                                            disabled="">
                                        RPL
                                    </div>
                                </th>
                                <th>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="disabledCheck1"
                                            disabled="">
                                        Hasil Pelatihan /Proses Pembelajaran
                                    </div>
                                </th>
                                <th>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="disabledCheck1"
                                            disabled="">
                                        Lainnya
                                    </div>
                                </th>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <h5 class="mb-3 mt-3">Daftar Unit Kompetensi</h5>
                <div class="table-responsive">
                    <table class="table table-bordered mt-3" border=”1″ id="ping">
                        <thead>
                            <tr>
                                <th width="10px" style="text-align: center">No</th>
                                <th width="300px" style="text-align: center">Kode Unit </th>
                                <th width="700px" style="text-align: center">Judul Unit</th>
                                <th width="400px" style="text-align: center">Jenis Standar (Standart Khusus/Standar
                                    Internasional/SKKNI)</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            <tr>
                                <td style="text-align: center">1</td>
                                <td> &nbsp; {{$show->kompetensi->kode}}</td>
                                <td width='320px'> &nbsp; {{$show->kompetensi->unit_kompetensi}}</td>

                                @if (!empty($show->kompetensi->kode10 ))
                                <td rowspan="10" width='200px'> &nbsp;{{$show->kompetensi->no_skkni}}</td>
                                @elseif (!empty($show->kompetensi->kode9 ))
                                <td rowspan="9" width='200px'> &nbsp;{{$show->kompetensi->no_skkni}}</td>

                                @elseif (!empty($show->kompetensi->kode8 ))
                                <td rowspan="8" width='200px'> &nbsp;{{$show->kompetensi->no_skkni}}</td>

                                @elseif (!empty($show->kompetensi->kode7 ))
                                <td rowspan="7" width='200px'> &nbsp;{{$show->kompetensi->no_skkni}}</td>

                                @elseif (!empty($show->kompetensi->kode6 ))
                                <td rowspan="6" width='200px'> &nbsp;{{$show->kompetensi->no_skkni}}</td>

                                @elseif (!empty($show->kompetensi->kode5 ))
                                <td rowspan="5" width='200px'> &nbsp;{{$show->kompetensi->no_skkni}}</td>

                                @elseif (!empty($show->kompetensi->kode4 ))
                                <td rowspan="4" width='200px'> &nbsp;{{$show->kompetensi->no_skkni}}</td>

                                @elseif (!empty($show->kompetensi->kode3 ))
                                <td rowspan="3" width='200px'> &nbsp;{{$show->kompetensi->no_skkni}}</td>
                                @elseif (!empty($show->kompetensi->kode2 ))
                                <td rowspan="2" width='200px'> &nbsp;{{$show->kompetensi->no_skkni}}</td>

                                @elseif (!empty($show->kompetensi->kode ))
                                <td rowspan="1" width='200px'> &nbsp;{{$show->kompetensi->no_skkni}}</td>
                                @else
                                {{-- <td rowspan="10" width='200px'> &nbsp;{{$show->kompetensi->no_skkni}}</td> --}}
                                @endif

                            </tr>
                            <tr>
                                @unless(!$show->kompetensi->kode2)
                                <!-- Tampilkan data -->
                                <td style="text-align: center">2</td>
                                <td> &nbsp; {{$show->kompetensi->kode2}}</td>
                                <td> &nbsp; {{$show->kompetensi->unit_kompetensi2}}</td>
                                @endunless
                            </tr>
                            <tr>
                                @unless(!$show->kompetensi->kode3)
                                <!-- Tampilkan data -->
                                <td style="text-align: center">3</td>
                                <td> &nbsp; {{$show->kompetensi->kode3}}</td>
                                <td> &nbsp; {{$show->kompetensi->unit_kompetensi3}}</td>
                                @endunless
                            </tr>

                            <tr>
                                @unless(!$show->kompetensi->kode4)
                                <!-- Tampilkan data -->
                                <td style="text-align: center">4</td>
                                <td> &nbsp; {{$show->kompetensi->kode4}}</td>
                                <td> &nbsp; {{$show->kompetensi->unit_kompetensi4}}</td>
                                @endunless
                            </tr>

                            <tr>
                                @unless(!$show->kompetensi->kode5)
                                <!-- Tampilkan data -->
                                <td style="text-align: center">5</td>
                                <td> &nbsp; {{$show->kompetensi->kode5}}</td>
                                <td> &nbsp; {{$show->kompetensi->unit_kompetensi5}}</td>
                                @endunless
                            </tr>

                            <tr>
                                @unless(!$show->kompetensi->kode6)
                                <!-- Tampilkan data -->
                                <td style="text-align: center">6</td>
                                <td> &nbsp; {{$show->kompetensi->kode6}}</td>
                                <td> &nbsp; {{$show->kompetensi->unit_kompetensi6}}</td>
                                @endunless
                            </tr>

                            <tr>
                                @unless(!$show->kompetensi->kode7)
                                <!-- Tampilkan data -->
                                <td style="text-align: center">7</td>
                                <td> &nbsp; {{$show->kompetensi->kode7}}</td>
                                <td> &nbsp; {{$show->kompetensi->unit_kompetensi7}}</td>
                                @endunless
                            </tr>
                        </tbody>
                    </table>

                    <h5 class="mb-3 mt-3">Bukti Persyaratan Kandidat *</h5>
                    <table class="table table-bordered mt-3" border=”1″ id="ping">
                        <thead>
                            <tr>
                                <th rowspan="2" width='40px' style="text-align: center">No</th>
                                <th width="700px" rowspan="2" style="text-align: center">Bukti Persyaratan </th>
                                <th width="200px" colspan="2" style="text-align: center">Memenuhi Pesyaratan </th>
                                <th width="200px" rowspan="2" style="text-align: center">Catatan</th>
                            </tr>
                            <tr>
                                <th style="text-align: center">Ya</th>
                                <th style="text-align: center">Tidak</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="text-align: center">1 </td>
                                <td style="padding-left: 10px; padding-right: 10px;">
                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Architecto rerum veritatis
                                    maiores
                                    deleniti? Id sed labore dolor molestias? Temporibus facere cumque beatae est
                                    eligendi possimus?
                                    Distinctio laudantium recusandae mollitia doloribus. Facere sequi nihil possimus
                                    perspiciatis ea
                                    quis facilis temporibus accusantium hic, dolore officia non eligendi velit nam et
                                    cupiditate
                                    iusto perferendis natus, dolorem voluptatibus laboriosam neque? Non nulla debitis
                                    repellat
                                    inventore possimus numquam enim ea accusantium perspiciatis quae aliquid delectus
                                    facilis
                                    voluptas cumque facere, error corrupti amet qui reprehenderit fugit! Eos a quia
                                    maiores
                                    recusandae soluta earum inventore, unde quis, illum exercitationem eveniet fugit
                                    obcaecati
                                    adipisci molestias laborum rerum facere?
                                </td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>

                    <h5 class="mb-3 mt-3">Bukti Relevan Lain *</h5>
                    <table class="table table-bordered mt-3" border=”1″ id="ping">
                        <thead>
                            <tr>
                                <th rowspan="2" width='40px' style="text-align: center">No</th>
                                <th rowspan="2" width="900px" style="text-align: center">Bukti Pendidikan/Pelatihan
                                </th>
                                <th colspan="2" width="10px" style="text-align: center">Bukti DiLampiran</th>
                            </tr>
                            <tr>
                                <th style="text-align: center">Ya</th>
                                <th style="text-align: center">Tidak</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="text-align: center">1</td>
                                <td> Fotokopi Ijazah</td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->ijazah === 0)
                                    @break
                                    @default
                                    &check;
                                    @endswitch


                                </td>
                                <td>
                                </td>
                            </tr>
                            <tr>
                                <td style="text-align: center">2</td>
                                <td>Surat Keterangan Perusahaan</td>
                                <td style="text-align: center">
                                    @switch($show)
                                    @case($show->surat_keterangan_perusahaan === 0)
                                    @break
                                    @default
                                    &check;
                                    @endswitch
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td style="text-align: center">3</td>
                                <td>Curruculum Vitae</td>
                                <td style="text-align: center">
                                    @switch($show)
                                    @case($show->cv === 0)
                                    @break
                                    @default
                                    &check;
                                    @endswitch
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td style="text-align: center">4</td>
                                <td> Sertifikat Pendukung</td>
                                <td style="text-align: center">
                                    @switch($show)
                                    @case($show->sertifikat_pendukung === 0)
                                    @break
                                    @default
                                    &check;
                                    @endswitch
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td style="text-align: center">5</td>
                                <td> KTP</td>
                                <td style="text-align: center">
                                    @switch($show)
                                    @case($show->ktp === 0)
                                    @break
                                    @default
                                    &check;
                                    @endswitch
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td style="text-align: center">6</td>
                                <td>Sertifikat Pelatihan CBT</td>
                                <td style="text-align: center">
                                    @switch($show)
                                    @case($show->p_cbt === 0)
                                    @break
                                    @default
                                    &check;
                                    @endswitch
                                </td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                    *) diisi oleh LSP
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /Invoice -->

<!-- Invoice Actions -->
<div class="col-xl-12 col-md-12 col-12">
    <div class="card">
        <div class="card-body">
            <div class="row g-3">
                <div class="col-sm-6">
                    <label class="form-label">Admin LSP</label>
                    <input type="text" class="form-control @error('no') is-invalid @enderror"
                        placeholder="Masukan No Skema" name="no" value="{{ old('no') }}" />
                    @error('no')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="col-sm-6">
                    <label class="form-label">No. Reg</label>
                    <input type="text" class="form-control @error('no') is-invalid @enderror"
                        placeholder="Masukan No Skema" name="no" value="{{ old('no') }}" />
                    @error('no')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="col-sm-6">
                    <label class="form-label">Status</label>
                    <input type="text" class="form-control @error('no') is-invalid @enderror"
                        placeholder="Masukan No Skema" name="no" value="{{ old('no') }}" />
                    @error('no')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="col-sm-6">
                    <label class="form-label">Tanda Tangan</label>
                    <input type="file" class="form-control @error('no') is-invalid @enderror"
                        placeholder="Masukan No Skema" name="no" value="{{ old('no') }}" />
                    @error('no')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="col-sm-12">
                    <label class="form-label">Catatan</label>
                    <textarea id="plAddress" name="alamat" class="form-control" rows="2"
                        placeholder="12, Business Park"></textarea>
                </div>
            </div>
            <div class="col-12 d-flex justify-content-end mt-4">
                <button class="btn btn-primary btn-submit">Submit</button>
            </div>
        </div>
    </div>
</div>
<!-- /Invoice Actions -->

@endsection