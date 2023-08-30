@extends('layouts/master')

@section('title', 'Users')

@section('content')
<div class="col-12">
    <div class="card">
        <div class="card-body">
            <div class="row mb-3">
                <div class="col-auto me-auto ">
                </div>
                <div class="col-auto">
                    <a href="{{ route('kompetensi.index') }}" class="btn btn-secondary">Back</a>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr style="background-color: skyblue">
                            <th width="150px" class="text-center">Nama Skema</th>
                            <th width="200px" class="text-center">No SKKNI</th>
                            <th width="200px" class="text-center">Kode & Kompetensi </th>
                            <th class="text-center">Element Kompetensi</th>
                            <th class="text-center">Kriteria Unjuk Kerja</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        <tr>
                            <td style="text-align: left">{{$show->skema->nama_skema}}</td>
                            <td>{{$show->no_skkni}}</td>
                            <td>{{$show->kode}}- {{$show->unit_kompetensi}}</td>
                            <td>{!! $show->element_kompetensi !!}</td>
                            <td>{!! $show->kuk !!}</td>
                        </tr>
                        @switch($show)
                        @case($show->kode == NULL)
                        @break
                        <tr>
                            <td></td>
                            <td></td>
                            <td>{{$show->kode2}}- {{$show->unit_kompetensi2}}</td>
                            <td>{!! $show->element_kompetensi2 !!}</td>
                            <td>{!! $show->kuk2 !!}</td>
                        </tr>
                        @default

                        @endswitch

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection