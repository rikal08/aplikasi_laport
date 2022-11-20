<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Format Raport</title>
<style>
        /* Pengaturan border-collapse jenis,ukuran serta warna huruf secara keseluruhan tabel */
    .table{
    border-collapse:collapse;
    font:normal normal 12px Verdana,Arial,Sans-Serif;
    color:#333333;
    }
    /* Mengatur warna latar, warna teks, ukruan font dan jenis bold (tebal) pada header tabel */
    .table th {
    background:#bbbb;
    color: black;
    font-weight:bold;
    font-size:10px;
    }
    /* Mengatur border dan jarak/ruang pada kolom */
    .table th,
    .table td {
    vertical-align:top;
    padding:5px 10px;
    border:1px solid #696969;
    }
    /* Mengatur warna baris */
    .table tr {
    background:#F5FFFA;
    }
    /* Mengatur warna baris genap (akan menghasilkan warna selang seling pada baris tabel) */
    .table tr:nth-child(even) {
    background:#F0F8FF;
    }
    .table-2 th,
    .table-2 td{
        font-weight: bold;
        font-size:12px;
    }
    .wrapper{
        width: 100%;
    }
    .bg-1{
        float: left;
        width: 50%;
    }
    .bg-2{
        float: right;
        width: 50%;
    }
</style>
</head>
<body style="margin: auto;width:100%;">
    <div class="wrapper">
        <div class="bg-1">
            <table class="table-2">
                <tr>
                    <td>Sekolah</td>
                    <td>:</td>
                    <td>{{ $sekolah->nama_sekolah }}</td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td>{{ $sekolah->alamat }}</td>
                </tr>
                <tr>
                    <td>Nama Peserta Didik</td>
                    <td>:</td>
                    <td>{{ $siswa->nama_siswa }}</td>
                </tr>
                <tr>
                    <td>NISN</td>
                    <td>:</td>
                    <td>{{ $siswa->nisn }}</td>
                </tr>
            </table>
        </div>
        {{--  --}}
        <div class="bg-2">
            <table class="table-2">
                <tr>
                    <td>Kelas</td>
                    <td>:</td>
                    <td>{{ $kelas->kode_kelas }}</td>
                </tr>
                <tr>
                    <td>Semester</td>
                    <td>:</td>
                    <td>2 (Dua)</td>
                </tr>
                <tr>
                    <td>Tahun Pelajaran</td>
                    <td>:</td>
                    <td>{{ $tha->tahun_ajaran }}</td>
                </tr>
            </table>
        </div>
    </div>
    <br>
    <table style="width: 100%; margin-top:70px;">
        <tr>
            <td><b>Capaian</b></td>
        </tr>
    </table>
    <table class="table" style="width: 100%; margin-top:10px;">
        <thead>
            <tr>
                <th rowspan="2" colspan="2">MATA PELAJARAN</th>
                <th rowspan="2" style="width: 50px">Pengetahuan (KI 3)</th>
                <th rowspan="2" style="width: 50px">Keterampilan (KI 4)</th>
                <th colspan="2">Sikap Spiritual dan Sosial <br>(KI 1 dan KI 2)</th>
            </tr>
        </thead>
        <thead>
            <tr>
                <th style="width: 70px">Dalam Mapel</th>
                <th style="width: 100px">Antar Mapel</th>
            </tr>
        </thead>
        <thead>
            <tr>
                <th style="text-align: left" colspan="2">Kelompok A</th>
                <th></th>
                <th></th>
                <th>SB/B/C/K</th>
                <th>Deskripsi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($nilai as $item)
                @if ($item->kelompok=='A')
                <tr>
                    <td style="width: 10px">{{ $no1++ }}</td>
                    <td>{{ $item->nama_mapel }}</td>
                    <td>{{ $item->nilai_peng }}</td>
                    <td>{{ $item->nilai_prak }}</td>
                    <td>{{ $item->nilai_sikap }}</td>
                    <td></td>
                </tr>
                @endif
            @endforeach
        </tbody>
        <thead>
            <tr>
                <th style="text-align: left" colspan="2">Kelompok B</th>
                <th></th>
                <th></th>
                <th>SB/B/C/K</th>
                <th>Deskripsi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($nilai as $item)
            @if ($item->kelompok=='B')
                
            <tr>
                <td style="width: 10px">{{ $no2++ }}</td>
                <td>{{ $item->nama_mapel }}</td>
                <td>{{ $item->nilai_peng }}</td>
                <td>{{ $item->nilai_prak }}</td>
                <td>{{ $item->nilai_sikap }}</td>
                <td></td>
            </tr>
            @endif
        @endforeach
        </tbody>
    </table>
    <br>
    <table class="table" style="width: 100%">
        <thead>
            <tr>
                <th style="width: 25px">No</th>
                <th>Extrakulikuler</th>
                <th>Nilai</th>
                <th>Keterangan</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($nilai_extra as $item)
            <tr>
                <td>{{ $no5++ }}</td>
                <td>{{ $item->nama_mapel }}</td>
                <td>{{ $item->nilai }}</td>
                <td>{{ $item->ket }}</td>
            </tr>
        @endforeach
        
    </tbody>
    </table>
    <br>
        <table class="table">
            <thead>
                <tr>
                    <th colspan="2">Ketidakhadiran</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Sakit</td>
                    <td>{{ $kehadiran->sakit }} Hari</td>
                </tr>
                <tr>
                    <td>Izin</td>
                    <td>{{ $kehadiran->izin }} Hari</td>
                </tr>
                <tr>
                    <td>Tanpa Keterangan</td>
                    <td>{{ $kehadiran->tk }} Hari</td>
                </tr>
            </tbody>
        </table>
        <br><br>
        <table align="center" style="width: 100%;font-size:12px;">
            <tr>
                <th style="padding-bottom:50px; text-align:left;">Mengetahui: <br> Orang Tua/Wali,</th>
                <th style="padding-bottom:50px;  text-align:right;">.........................., {{ date('d/m/Y') }} <br> Wali Kelas,</th>
            </tr>
            <tr>
                <th style=" text-align:left;">___________________________</th>
                <th style=" text-align:right;">{{ $guru->nama_guru }}<br>NIP:{{ $guru->nip }}</th>
            </tr>
        </table>
</body>

<body style="margin: auto;width:100%;">
    <div class="wrapper">
        <div class="bg-1">
            <table class="table-2">
                <tr>
                    <td>Sekolah</td>
                    <td>:</td>
                    <td>{{ $sekolah->nama_sekolah }}</td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td>{{ $sekolah->alamat }}</td>
                </tr>
                <tr>
                    <td>Nama Peserta Didik</td>
                    <td>:</td>
                    <td>{{ $siswa->nama_siswa }}</td>
                </tr>
                <tr>
                    <td>NISN</td>
                    <td>:</td>
                    <td>{{ $siswa->nisn }}</td>
                </tr>
            </table>
        </div>
        {{--  --}}
        <div class="bg-2">
            <table class="table-2">
                <tr>
                    <td>Kelas</td>
                    <td>:</td>
                    <td>{{ $kelas->kode_kelas }}</td>
                </tr>
                <tr>
                    <td>Semester</td>
                    <td>:</td>
                    <td>1 (Satu)</td>
                </tr>
                <tr>
                    <td>Tahun Pelajaran</td>
                    <td>:</td>
                    <td>{{ $tha->tahun_ajaran }}</td>
                </tr>
            </table>
        </div>
    </div>
    <br>
    <table style="width: 100%; margin-top:50px;">
        <tr>
            <td><b>Deskripsi</b></td>
        </tr>
    </table>
    <table class="table" style="width: 100%; margin-top:3px;font-size:8px;">
        <thead>
            <tr>
                <th colspan="2">MATA PELAJARAN</th>
                <th>KOMPETENSI</th>
                <th>CATATAN</th>
            </tr>
        </thead>
        <thead>
            <tr>
                <th style="text-align: left" colspan="2">Kelompok A</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($nilai as $item)
                @if ($item->kelompok=='A')
                    
                <tr>
                    <td style="width: 10px" rowspan="3">{{ $no3++ }}</td>
                    <td style="width: 120px" rowspan="3">{{ $item->nama_mapel }}</td>
                    <td>Pengetahuan</td>
                    <td>{{ $item->des_peng }}</td>
                </tr>
                <tr>
                    <td style="width: 10px">Keterampilan</td>
                    <td style="width: 150px">{{ $item->des_peng }}</td>
                </tr>
                <tr>
                    <td style="width: 10px">Sikap Spritual dan Sosial</td>
                    <td style="width: 150px">{{ $item->des_peng }}</td>
                </tr>
                @endif
            @endforeach
        </tbody>
        <thead>
            <tr>
                <th style="text-align: left" colspan="2">Kelompok B</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($nilai as $item)
            @if ($item->kelompok=='B')
                
            <tr>
                <td style="width: 10px" rowspan="3">{{ $no4++ }}</td>
                    <td style="width: 120px" rowspan="3">{{ $item->nama_mapel }}</td>
                    <td>Pengetahuan</td>
                    <td>{{ $item->des_peng }}</td>
                </tr>
                <tr>
                    <td style="width: 10px">Keterampilan</td>
                    <td style="width: 150px">{{ $item->des_prak }}</td>
                </tr>
                <tr>
                    <td style="width: 10px">Sikap Spritual dan Sosial</td>
                    <td style="width: 150px">{{ $item->des_sikap }}</td>
                </tr>
                @endif
                @endforeach
        </tbody>
    </table>
        <br>
        <table align="center" style="width: 100%;font-size:12px;">
            <tr>
                <th style="padding-bottom:50px; text-align:left;">Mengetahui: <br> Orang Tua/Wali,</th>
                <th style="text-align:left;">
                    <div style="width: 70%;border:1px solid black;float:right;font-size:10px;padding:2px;">
                        <p><b>Keputusan:</b></p>
                        <p>Berdasarkan hasil yang dicapai pada semester 1 dan 2, peserta didik ditetapkan <br>
                        naik ke kelas ________ (______________) <br>
                        tinggal di kelas ________ (______________)</p>
            
                        <p>_______________, {{ date('d/m/Y') }}</p>
                        <p><b>TTD Kepala Sekolah</b></p><br>
                        <p>_____________________________ <br> NIP:</p>
                    </div>
                </th>
            </tr>
            <tr>
                <th style=" text-align:left;">___________________________</th>
            </tr>
        </table>
</body>
</html>