<!DOCTYPE html>

<head>
    <title>Surat Permohonan Cuti - TTI</title>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <style>
        #judul {
            text-align: left;
            font-family: sans-serif;
        }

        #halaman {
            font-family: sans-serif;
        }

        #ping {
            border-spacing: 0px;
            border-collapse: separate;
            border: 1px solid black;
        }
    </style>
</head>

<body>
    <div id=halaman>
        <img src="https://sisfo.bnsp.go.id/images/K8cRm4d6SGTrLQXefW3ON0JsIYM5ioPH.png" width="80" />
        <h3 id=judul>FR-APL-01 FORMULIR PERMOHONAN SERTIFIKASI KOMPETENSI</h3>
        <h4 id=judul>Bagian 1 : Rincian Data Pemohon Sertifikasi</h4>
        <p id=judul>Pada bagian ini, termasuk data pribadi, data pendidikan formal serta data pekerjaan anda saat ini.
        </p>

        <p id=judul><b>A. Data Pribadi </b></p>
        @foreach ($datas as $item)
        <table>
            <tr>
                <td>Nama Lengkap</td>
                <td style="text-align: right">:</td>
                <td>{{ $item->nama_lengkap->name }}</td>
            </tr>
            <tr>
                <td style="width: 15%;">Tempat/Tanggal Lahir</td>
                <td style="text-align: right"> &nbsp; &nbsp; &nbsp; &nbsp;:</td>
                <td>{{ $item->tempat_lahir}}, {{\Carbon\Carbon::parse($item->tanggal_lahir)->format('d M Y')}}</td>
            </tr>
            <tr>
                <td style="width: 15%;">Jenis Kelamin </td>
                <td style="text-align: right">:</td>
                <td>{{ $item->jenis_kelamin }}</td>
            </tr>
            <tr>
                <td style="width: 15%;">Kebangsaan</td>
                <td style="text-align: right">:</td>
                <td>{{ $item->kebangsaan }}</td>
            </tr>
            <tr>
                <td style="width: 15%;">Alamat </td>
                <td style="text-align: right">:</td>
                <td>{{ $item->alamat }}</td>
            </tr>
            <td style="width: 15%;"> No. Telefon</td>
            <td style="text-align: right">:</td>
            <td>{{ $item->no_hp }}</td>
            </tr>
            <tr>
                <td style="width: 15%;">Email</td>
                <td style="text-align: right">:</td>
                <td>{{ $item->email->email }}</td>
            </tr>
            <tr>
                <td style="width: 15%;">Pendidikan Terakhir</td>
                <td style="text-align: right">:</td>
                <td>{{ $item->pendidikan_terakhir }}</td>
            </tr>
        </table>
        <p id=judul><b>B. Data Pekerjaan Sekarang</b></p>
        <table>
            <tr>
                <td style="width: 15%;">Nama Perusahaan</td>
                <td style="text-align: right">:</td>
                <td>{{ $item->nama_perusahaan }}</td>
            </tr>
            <tr>
                <td style="width: 15%;">Jabatan</td>
                <td style="text-align: right"> &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;:</td>
                <td>{{ $item->jabatan }}</td>
            </tr>
            <tr>
                <td style="width: 15%;">Alamat</td>
                <td style="text-align: right">:</td>
                <td>{{ $item->alamat_perusahaan }}</td>
            </tr>
            <tr>
                <td style="width: 15%;">No. Telefon</td>
                <td style="text-align: right">:</td>
                <td>{{ $item->no_hp_perusahaan }}</td>
            </tr>
            <tr>
                <td style="width: 15%;">Email </td>
                <td style="text-align: right">:</td>
                <td>{{ $item->email_perusahaan }}</td>
            </tr>
        </table>

        <h4 id=judul>Bagian 2 : Unit Kompetensi</h4>
        <p id=judul>Pada bagian ini, termasuk data pribadi, data pendidikan formal serta data pekerjaan anda saat ini.
        </p>

        <table class="table" border="1" id="ping">
            <thead>
                <tr>
                    <th colspan="2" rowspan="2" style="text-align: center">Nama Sertifikasi Okupasi</th>
                    <th style="text-align: center">Judul</th>
                    <th style="text-align: center">:</th>
                    <th colspan="4" style="text-align: center">Jenis Standar (Standart Khusus/Standar
                        Internasional/SKKNI)</th>
                </tr>
                </tr>
                <tr>
                    <th>Nomor</th>
                    <th>:</th>
                    <th colspan="4">498578329578329473289</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                <tr>
                    <th colspan="3">Tujuan Assessment</th>
                    <th>:</th>
                    <th> </th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
            </tbody>
        </table>

        <h4 id=judul>Daftar Unit Kompetensi :</h4>
        <table class="table" border=”1″ id="ping">
            <thead>
                <tr>
                    <th width='10px' style="text-align: center">No</th>
                    <th style="text-align: center">Kode Unit </th>
                    <th style="text-align: center">Judul Unit</th>
                    <th style="text-align: center">Jenis Standar (Standart Khusus/Standar Internasional/SKKNI)</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                <tr>
                    <td width='40px' style="text-align: center">{{$loop->iteration}}</td>
                    <td width='150px'> &nbsp; {{$item->kompetensi->kode}}</td>
                    <td width='320px'> &nbsp; {{$item->kompetensi->unit_kompetensi}}</td>

                    @if (!empty($item->kompetensi->kode10 ))
                    <td rowspan="10" width='200px'> &nbsp;{{$item->kompetensi->no_skkni}}</td>
                    @elseif (!empty($item->kompetensi->kode9 ))
                    <td rowspan="9" width='200px'> &nbsp;{{$item->kompetensi->no_skkni}}</td>

                    @elseif (!empty($item->kompetensi->kode8 ))
                    <td rowspan="8" width='200px'> &nbsp;{{$item->kompetensi->no_skkni}}</td>

                    @elseif (!empty($item->kompetensi->kode7 ))
                    <td rowspan="7" width='200px'> &nbsp;{{$item->kompetensi->no_skkni}}</td>

                    @elseif (!empty($item->kompetensi->kode6 ))
                    <td rowspan="6" width='200px'> &nbsp;{{$item->kompetensi->no_skkni}}</td>

                    @elseif (!empty($item->kompetensi->kode5 ))
                    <td rowspan="5" width='200px'> &nbsp;{{$item->kompetensi->no_skkni}}</td>

                    @elseif (!empty($item->kompetensi->kode4 ))
                    <td rowspan="4" width='200px'> &nbsp;{{$item->kompetensi->no_skkni}}</td>

                    @elseif (!empty($item->kompetensi->kode3 ))
                    <td rowspan="3" width='200px'> &nbsp;{{$item->kompetensi->no_skkni}}</td>
                    @elseif (!empty($item->kompetensi->kode2 ))
                    <td rowspan="2" width='200px'> &nbsp;{{$item->kompetensi->no_skkni}}</td>

                    @elseif (!empty($item->kompetensi->kode ))
                    <td rowspan="1" width='200px'> &nbsp;{{$item->kompetensi->no_skkni}}</td>
                    @else
                    {{-- <td rowspan="10" width='200px'> &nbsp;{{$item->kompetensi->no_skkni}}</td> --}}
                    @endif

                </tr>
                <tr>
                    @unless(!$item->kompetensi->kode2)
                    <!-- Tampilkan data -->
                    <td width='40px' style="text-align: center">2</td>
                    <td width='150px'> &nbsp; {{$item->kompetensi->kode2}}</td>
                    <td width='300px'> &nbsp; {{$item->kompetensi->unit_kompetensi2}}</td>
                    @endunless
                </tr>
                <tr>
                    @unless(!$item->kompetensi->kode3)
                    <!-- Tampilkan data -->
                    <td width='40px' style="text-align: center">3</td>
                    <td width='150px'> &nbsp; {{$item->kompetensi->kode3}}</td>
                    <td width='300px'> &nbsp; {{$item->kompetensi->unit_kompetensi3}}</td>
                    @endunless
                </tr>

                <tr>
                    @unless(!$item->kompetensi->kode4)
                    <!-- Tampilkan data -->
                    <td width='40px' style="text-align: center">4</td>
                    <td width='150px'> &nbsp; {{$item->kompetensi->kode4}}</td>
                    <td width='300px'> &nbsp; {{$item->kompetensi->unit_kompetensi4}}</td>
                    @endunless
                </tr>

                <tr>
                    @unless(!$item->kompetensi->kode5)
                    <!-- Tampilkan data -->
                    <td width='40px' style="text-align: center">5</td>
                    <td width='150px'> &nbsp; {{$item->kompetensi->kode5}}</td>
                    <td width='300px'> &nbsp; {{$item->kompetensi->unit_kompetensi5}}</td>
                    @endunless
                </tr>

                <tr>
                    @unless(!$item->kompetensi->kode6)
                    <!-- Tampilkan data -->
                    <td width='40px' style="text-align: center">6</td>
                    <td width='150px'> &nbsp; {{$item->kompetensi->kode6}}</td>
                    <td width='300px'> &nbsp; {{$item->kompetensi->unit_kompetensi6}}</td>
                    @endunless
                </tr>

                <tr>
                    @unless(!$item->kompetensi->kode7)
                    <!-- Tampilkan data -->
                    <td width='40px' style="text-align: center">7</td>
                    <td width='150px'> &nbsp; {{$item->kompetensi->kode7}}</td>
                    <td width='300px'> &nbsp; {{$item->kompetensi->unit_kompetensi7}}</td>
                    @endunless
                </tr>
            </tbody>
        </table>

        <h4 id=judul>Bagian 3 : A. Bukti Persyaratan Kandidat *</h4>

        <table class="table" border=”1″ id="ping">
            <thead>
                <tr>
                    <th rowspan="2" width='40px' style="text-align: center">No</th>
                    <th width="400px" rowspan="2">Bukti Persyaratan </th>
                    <th width="200px" colspan="2">Memenuhi Pesyaratan </th>
                    <th width="100px" rowspan="2">Catatan</th>
                </tr>
                <tr>
                    <th>Ya</th>
                    <th>Tidak</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td style="text-align: center">1 </td>
                    <td style="padding-left: 10px; padding-right: 10px;">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Architecto rerum veritatis maiores
                        deleniti? Id sed labore dolor molestias? Temporibus facere cumque beatae est eligendi possimus?
                        Distinctio laudantium recusandae mollitia doloribus. Facere sequi nihil possimus perspiciatis ea
                        quis facilis temporibus accusantium hic, dolore officia non eligendi velit nam et cupiditate
                        iusto perferendis natus, dolorem voluptatibus laboriosam neque? Non nulla debitis repellat
                        inventore possimus numquam enim ea accusantium perspiciatis quae aliquid delectus facilis
                        voluptas cumque facere, error corrupti amet qui reprehenderit fugit! Eos a quia maiores
                        recusandae soluta earum inventore, unde quis, illum exercitationem eveniet fugit obcaecati
                        adipisci molestias laborum rerum facere?
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
        </table>

        <h4 id=judul>Bagian 3 : B. Bukti Relevan Lain *</h4>

        <table class="table" border=”1″ id="ping">
            <thead>
                <tr>
                    <th rowspan="2" width='40px' style="text-align: center">No</th>
                    <th rowspan="2" width="550px">Bukti Pendidikan/Pelatihan </th>
                    <th colspan="2" width="150px">Bukti DiLampiran</th>
                </tr>
                <tr>
                    <th>Ya</th>
                    <th>Tidak</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td style="text-align: center">1</td>
                    <td></td>
                    <td>
                        &check; </td>
                    <td>
                    </td>
                </tr>
                <tr>
                    <td style="text-align: center">2</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td style="text-align: center">3</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td style="text-align: center">4</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td style="text-align: center">5</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
        </table>
        <p style="margin-top: 5px">*) diisi oleh LSP</p>
        @endforeach

        √
    </div>
</body>

</html>
