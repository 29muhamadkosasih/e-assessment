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
                    {{-- dt-scrollableTable --}}
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
                        @case($show->kode2 == NULL)
                        @break
                        @default
                        <tr>
                            <td></td>
                            <td></td>
                            <td>{{$show->kode2}}- {{$show->unit_kompetensi2}}</td>
                            <td>{!! $show->element_kompetensi2 !!}</td>
                            <td>{!! $show->kuk2 !!}</td>
                        </tr>
                        @endswitch

                        @switch($show)
                        @case($show->kode3 == NULL)
                        @break
                        @default
                        <tr>
                            <td></td>
                            <td></td>
                            <td>{{$show->kode3}}- {{$show->unit_kompetensi3}}</td>
                            <td>{!! $show->element_kompetensi3 !!}</td>
                            <td>{!! $show->kuk3 !!}</td>
                        </tr>
                        @endswitch

                        @switch($show)
                        @case($show->kode4 == NULL)
                        @break
                        @default
                        <tr>
                            <td></td>
                            <td></td>
                            <td>{{$show->kode4}}- {{$show->unit_kompetensi4}}</td>
                            <td>{!! $show->element_kompetensi4 !!}</td>
                            <td>{!! $show->kuk4 !!}</td>
                        </tr>
                        @endswitch

                        @switch($show)
                        @case($show->kode5 == NULL)
                        @break
                        @default
                        <tr>
                            <td></td>
                            <td></td>
                            <td>{{$show->kode5}}- {{$show->unit_kompetensi5}}</td>
                            <td>{!! $show->element_kompetensi5 !!}</td>
                            <td>{!! $show->kuk5 !!}</td>
                        </tr>
                        @endswitch

                        @switch($show)
                        @case($show->kode6 == NULL)
                        @break
                        @default
                        <tr>
                            <td></td>
                            <td></td>
                            <td>{{$show->kode6}}- {{$show->unit_kompetensi6}}</td>
                            <td>{!! $show->element_kompetensi6 !!}</td>
                            <td>{!! $show->kuk6 !!}</td>
                        </tr>
                        @endswitch

                        @switch($show)
                        @case($show->kode7 == NULL)
                        @break
                        @default
                        <tr>
                            <td></td>
                            <td></td>
                            <td>{{$show->kode7}}- {{$show->unit_kompetensi7}}</td>
                            <td>{!! $show->element_kompetensi7 !!}</td>
                            <td>{!! $show->kuk7 !!}</td>
                        </tr>
                        @endswitch

                        @switch($show)
                        @case($show->kode8 == NULL)
                        @break
                        @default
                        <tr>
                            <td></td>
                            <td></td>
                            <td>{{$show->kode8}}- {{$show->unit_kompetensi8}}</td>
                            <td>{!! $show->element_kompetensi8 !!}</td>
                            <td>{!! $show->kuk8 !!}</td>
                        </tr>
                        @endswitch

                        @switch($show)
                        @case($show->kode9 == NULL)
                        @break
                        @default
                        <tr>
                            <td></td>
                            <td></td>
                            <td>{{$show->kode9}}- {{$show->unit_kompetensi9}}</td>
                            <td>{!! $show->element_kompetensi9 !!}</td>
                            <td>{!! $show->kuk9 !!}</td>
                        </tr>
                        @endswitch

                        @switch($show)
                        @case($show->kode10 == NULL)
                        @break
                        @default
                        <tr>
                            <td></td>
                            <td></td>
                            <td>{{$show->kode10}}- {{$show->unit_kompetensi10}}</td>
                            <td>{!! $show->element_kompetensi10 !!}</td>
                            <td>{!! $show->kuk10 !!}</td>
                        </tr>
                        @endswitch

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
