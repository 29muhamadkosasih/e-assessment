@extends('layouts/master')
@section('title', 'APL 01')
@section('content')
<div class="col">
    <div class="card mb-3">
        <div class="card-header">
            <ul class="nav nav-tabs card-header-tabs" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#form-tabs-account" role="tab"
                        aria-selected="false" tabindex="-1">
                        Data Diri
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#form-tabs-personal" role="tab"
                        aria-selected="true">
                        Data Pekerjaan
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#form-tabs-social" role="tab"
                        aria-selected="false" tabindex="-1">
                        Upload Berkas
                    </button>
                </li>
            </ul>
        </div>
        <form action="{{ route('apl_01.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="tab-content">
                <div class="tab-pane fade" id="form-tabs-personal" role="tabpanel">
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <label class="form-label" for="plFirstName">Nama Institusi/Perusahaan</label>
                            <input type="text" id="plFirstName" name="nama_perusahaan" class="form-control"
                                placeholder="Masukan Nama Lengkap" />
                        </div>
                        <div class="col-sm-6">
                            <label class="form-label" for="plFirstName">Jabatan</label>
                            <input type="text" id="plFirstName" name="jabatan" class="form-control"
                                placeholder="Masukan Nama Lengkap" />
                        </div>
                        <div class="col-sm-6">
                            <label class="form-label" for="plEmail">Email Institusi/Perusahaan</label>
                            <input type="text" id="plEmail" name="email_perusahaan" class="form-control"
                                placeholder="john.doe@example.com" />
                        </div>
                        <div class="col-sm-6">
                            <label class="form-label" for="plFirstName">No. Hp Institusi/Perusahaan</label>
                            <input type="text" id="plFirstName" name="no_hp_perusahaan" class="form-control"
                                placeholder="08590210231" />
                        </div>
                        <div class="col-sm-12">
                            <label class="form-label" for="plAddress">Alamat Institusi/Perusahaan</label>
                            <textarea id="plAddress" name="alamat_perusahaan" class="form-control" rows="2"
                                placeholder="12, Business Park"></textarea>
                        </div>
                    </div>

                </div>

                <div class="tab-pane fade active show" id="form-tabs-account" role="tabpanel">
                    <div class="row g-3">
                        <div class="col-sm-12">
                            <label class="form-label" for="plFirstName">Skema</label>
                            <select class="form-select @error('kompetensi_id') is-invalid @enderror" id="selectDefault"
                                name="kompetensi_id" value="{{ old('kompetensi_id') }}">
                                <option selected>Open this select</option>
                                @foreach ($kompetensi as $key => $value)
                                <option value="{{ $value->id }}">
                                    {{ $value->skema->nama_skema }}
                                </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-sm-6">
                            <label class="form-label" for="plFirstName">Nama Lengkap</label>
                            <input type="text" id="plFirstName" name="nama_lengkap_id" class="form-control"
                                placeholder="Masukan Nama Lengkap" value="{{ Auth::user()->name }}" readonly />
                        </div>
                        <div class="col-sm-6">
                            <label class="form-label" for="plLastName">Tempat Lahir</label>
                            <input type="text" id="plLastName" name="tempat_lahir" class="form-control"
                                placeholder="Masukan Tempat Lahir" />
                        </div>
                        <div class="col-sm-6">
                            <label class="form-label" for="plLastName">Tanggal Lahir</label>
                            <input type="date" id="plLastName" name="tanggal_lahir" class="form-control"
                                placeholder="Masukan Tanggal Lahir" />
                        </div>
                        <div class="col-sm-6">
                            <label class="form-label" for="plMaintenencePer">Jenis Kelamin</label>
                            <select id="plMaintenencePer" name="jenis_kelamin" class="form-select">
                                <option selected>Open this select</option>
                                <option value="1">Laki-laki</option>
                                <option value="2">Wanita</option>
                            </select>
                        </div>
                        <div class="col-sm-6">
                            <label class="form-label" for="plEmail">Email</label>
                            <input type="text" id="plEmail" name="email_id" class="form-control"
                                placeholder="john.doe@example.com" value="{{ Auth::user()->email }}" readonly />
                        </div>
                        <div class="col-sm-6">
                            <label class="form-label" for="plFirstName">No. Hp</label>
                            <input type="text" id="plFirstName" name="no_hp" class="form-control"
                                placeholder="08590210231" />
                        </div>
                        <div class="col-sm-6">
                            <label class="form-label" for="plFirstName">Pendidikan Terakhir</label>
                            <input type="text" id="plFirstName" name="pendidikan_terakhir" class="form-control"
                                placeholder="Masukan Pendidikan Terakhir" />
                        </div>
                        <div class="col-sm-6">
                            <label class="form-label" for="plFirstName">Kebangsaan</label>
                            <input type="text" id="plFirstName" name="kebangsaan" class="form-control"
                                placeholder="Masukan Kebangsaan" />
                        </div>
                        <div class="col-sm-12">
                            <label class="form-label" for="plAddress">Alamat</label>
                            <textarea id="plAddress" name="alamat" class="form-control" rows="2"
                                placeholder="12, Business Park"></textarea>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="form-tabs-social" role="tabpanel">
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <label class="form-label d-block" for="plBedrooms">Ijazah</label>
                            <input type="file" id="plBedrooms" name="ijazah" class="form-control" placeholder="3" />
                        </div>
                        <div class="col-sm-6">
                            <label class="form-label" for="plFloorNo">Surat Keterangan Perusahaan</label>
                            <input type="file" id="plFloorNo" name="surat_keterangan_perusahaan" class="form-control"
                                placeholder="12" />
                        </div>
                        <div class="col-sm-6">
                            <label class="form-label d-block" for="plBathrooms">CV</label>
                            <input type="file" id="plBathrooms" name="cv" class="form-control" placeholder="4" />
                        </div>
                        <div class="col-sm-6">
                            <label class="form-label d-block" for="plBathrooms">Sertikat K3</label>
                            <input type="file" id="plBathrooms" name="sertifikat_k3" class="form-control"
                                placeholder="4" />
                        </div>

                    </div>
                    <div class="col-12 d-flex justify-content-end mt-4">
                        <button class="btn btn-success btn-submit">Submit</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
