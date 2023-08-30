<!DOCTYPE html>

<head>
    <title>Surat Permohonan Cuti - TTI</title>
    <meta charset="utf-8">
    <style>
        #judul {
            text-align: left;
            font-family: sans-serif;
        }

        #halaman {
            width: auto;
            height: auto;
            position: absolute;
            padding-top: 5px;
            padding-left: 10px;
            padding-right: 10px;
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


        <p id=judul><b>A. Data Pribadi</b></p>
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
        <div class="table-responsive text-nowrap">
            <table class="table" border=”1″ id="ping">
                <thead>
                    <tr style="background-color: skyblue">
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
                        <td width='300px'> &nbsp; {{$item->kompetensi->unit_kompetensi}}</td>
                        <td width='200px'> &nbsp;{{$item->kompetensi->no_skkni}}</td>
                    </tr>
                    @unless(!$item->kompetensi->kode2)
                    <!-- Tampilkan data -->
                    <td width='40px' style="text-align: center">2</td>
                    <td width='150px'> &nbsp; {{$item->kompetensi->kode2}}</td>
                    <td width='300px'> &nbsp; {{$item->kompetensi->unit_kompetensi2}}</td>
                    <td width='200px'> &nbsp;{{$item->kompetensi->no_skkni2}}</td>
                    @endunless

                    @unless(!$item->kompetensi->kode3)
                    <!-- Tampilkan data -->
                    <td width='40px' style="text-align: center">3</td>
                    <td width='150px'> &nbsp; {{$item->kompetensi->kode3}}</td>
                    <td width='300px'> &nbsp; {{$item->kompetensi->unit_kompetensi3}}</td>
                    <td width='200px'> &nbsp;{{$item->kompetensi->no_skkni3}}</td>
                    @endunless

                    @unless(!$item->kompetensi->kode4)
                    <!-- Tampilkan data -->
                    <td width='40px' style="text-align: center">4</td>
                    <td width='150px'> &nbsp; {{$item->kompetensi->kode4}}</td>
                    <td width='300px'> &nbsp; {{$item->kompetensi->unit_kompetensi4}}</td>
                    <td width='200px'> &nbsp;{{$item->kompetensi->no_skkni4}}</td>
                    @endunless
                </tbody>
            </table>
        </div>
        @endforeach
    </div>
</body>

</html>