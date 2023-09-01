@extends('layouts/master')

@section('title', 'Kompetensi')

@section('content')
<!-- Invoice table -->
<div class="col-xl-12">
    <div class="card">
        <div class="card-body">
            <div class="row ">
                <div class="col-auto me-auto ">
                    <h5 class="mb-0">List Data Kompetensi</h5>
                </div>
                <div class="col-auto">
                    <a href="{{ route('kompetensi.create') }}" class="btn btn-primary">Create</a>

                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered table-hover zero-configuration">
                    <thead>
                        <tr style="background-color: skyblue">
                            <th width='5px' style="text-align: center">No</th>
                            <th>Nama Skema</th>
                            <th>No SKKNI</th>
                            <th>Kode</th>
                            <th>Unit Kompetensi</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($kompetensi as $data)
                        <tr>
                            <td class="text-center">{{$loop->iteration}}</td>
                            <td>{{$data->skema->nama_skema}}</td>
                            <td>{{$data->no_skkni}}</td>
                            <td>
                                {{$data->kode}} <br>

                                @unless(!$data->kode2)
                                <!-- Tampilkan data -->
                                {{ $data->kode2 }} <br>
                                @endunless

                                @unless(!$data->kode3)
                                <!-- Tampilkan data -->
                                {{ $data->kode3 }} <br>
                                @endunless

                                @unless(!$data->kode4)
                                <!-- Tampilkan data -->
                                {{ $data->kode4 }} <br>
                                @endunless

                                @unless(!$data->kode5)
                                <!-- Tampilkan data -->
                                {{ $data->kode5 }} <br>
                                @endunless

                                @unless(!$data->kode6)
                                <!-- Tampilkan data -->
                                {{ $data->kode6 }} <br>
                                @endunless

                                @unless(!$data->kode7)
                                <!-- Tampilkan data -->
                                {{ $data->kode7 }} <br>
                                @endunless

                                @unless(!$data->kode8)
                                <!-- Tampilkan data -->
                                {{ $data->kode8 }} <br>
                                @endunless

                                @unless(!$data->kode9)
                                <!-- Tampilkan data -->
                                {{ $data->kode9 }} <br>
                                @endunless

                                @unless(!$data->kode10)
                                <!-- Tampilkan data -->
                                {{ $data->kode10 }} <br>
                                @endunless

                            </td>
                            <td>{{$data->unit_kompetensi}} <br>

                                @unless(!$data->unit_kompetensi2)
                                <!-- Tampilkan data -->
                                {{ $data->unit_kompetensi2 }} <br>
                                @endunless

                                @unless(!$data->unit_kompetensi3)
                                <!-- Tampilkan data -->
                                {{ $data->unit_kompetensi3 }} <br>
                                @endunless

                                @unless(!$data->unit_kompetensi4)
                                <!-- Tampilkan data -->
                                {{ $data->unit_kompetensi4 }} <br>
                                @endunless

                                @unless(!$data->unit_kompetensi5)
                                <!-- Tampilkan data -->
                                {{ $data->unit_kompetensi5 }} <br>
                                @endunless

                                @unless(!$data->unit_kompetensi6)
                                <!-- Tampilkan data -->
                                {{ $data->unit_kompetensi6 }} <br>
                                @endunless

                                @unless(!$data->unit_kompetensi7)
                                <!-- Tampilkan data -->
                                {{ $data->unit_kompetensi7 }} <br>
                                @endunless

                                @unless(!$data->unit_kompetensi8)
                                <!-- Tampilkan data -->
                                {{ $data->unit_kompetensi8 }} <br>
                                @endunless

                                @unless(!$data->unit_kompetensi9)
                                <!-- Tampilkan data -->
                                {{ $data->unit_kompetensi9 }} <br>
                                @endunless

                                @unless(!$data->unit_kompetensi10)
                                <!-- Tampilkan data -->
                                {{ $data->unit_kompetensi10 }} <br>
                                @endunless

                            </td>
                            <td class="text-center">
                                <a href="{{ route('kompetensi.show', $data->id) }}"
                                    class="btn btn-icon btn-success btn-sm">
                                    <span class="ti ti-eye"></span>
                                </a>
                                <a href="{{ route('kompetensi.edit', $data->id) }}"
                                    class="btn btn-icon btn-warning btn-sm">
                                    <span class="ti ti-edit"></span>
                                </a>
                                <form action="{{ route('kompetensi.destroy', $data->id) }}" class="d-inline-block"
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