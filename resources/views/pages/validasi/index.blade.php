@extends('layouts/master')

@section('title', 'apl_01')

@section('content')
<!-- Invoice table -->
<div class="col-xl-12">
    <div class="card">
        <div class="card-body">
            <div class="row ">
                <div class="col-auto me-auto ">
                    <h5 class="mb-0">List Data APL-01</h5>
                </div>
            </div>
            <div class="table-responsive text-nowrap">
                <table class="table table-bordered table-hover zero-configuration">
                    <thead>
                        <tr style="background-color: skyblue">
                            <th width='10px' style="text-align: center">No</th>
                            <th>No Pendaftaran </th>
                            <th>Tanggal Daftar</th>
                            <th>Nama Assessi</th>
                            <th>Nama Skema</th>
                            <th>Data Personal</th>
                            <th>Portfolio</th>
                            <th>Validasi Admin LSP</th>
                            <th>Tanggal Validasi</th>
                            <th width='150px' class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($apl_01 as $data)
                        <tr>
                            <td class="text-center">{{$loop->iteration}}</td>
                            <td>{{$data->no_pendaftaran}}</td>
                            <td>{{$data->created_at}}</td>
                            <td>{{$data->nama_lengkap->name}}</td>
                            <td>{{$data->kompetensi->skema->nama_skema}}</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class="text-center">

                                <a href="{{ route('validasi.show', $data->id) }}"
                                    class="btn btn-icon btn-success btn-sm">
                                    <span class="ti ti-eye"></span>
                                </a>
                                <form action="{{ route('validasi.destroy', $data->id) }}" class="d-inline-block"
                                    method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" onclick="return confirm('Are you sure?')"
                                        class="btn btn-icon btn-danger btn-sm">
                                        <span class="ti ti-trash"></span>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- /Invoice table -->
@endsection
