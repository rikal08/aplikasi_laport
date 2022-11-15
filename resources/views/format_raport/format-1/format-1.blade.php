<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Format Raport</title>
<style>
        /* Pengaturan border-collapse jenis,ukuran serta warna huruf secara keseluruhan tabel */
    table{
    border-collapse:collapse;
    font:normal normal 12px Verdana,Arial,Sans-Serif;
    color:#333333;
    }
    /* Mengatur warna latar, warna teks, ukruan font dan jenis bold (tebal) pada header tabel */
    table th {
    background:#00BFFF;
    color:#DCDCDC;
    font-weight:bold;
    font-size:14px;
    }
    /* Mengatur border dan jarak/ruang pada kolom */
    table th,
    table td {
    vertical-align:top;
    padding:5px 10px;
    border:1px solid #696969;
    }
    /* Mengatur warna baris */
    table tr {
    background:#F5FFFA;
    }
    /* Mengatur warna baris genap (akan menghasilkan warna selang seling pada baris tabel) */
    table tr:nth-child(even) {
    background:#F0F8FF;
    }
</style>
</head>
<body style="margin: auto; width:100%;">
    <div style="text-align: center">
        <h3>Format Raport {{ $format->nama_format }}</h3>
    </div>
    <hr>
    <br>
    <table style="width: 100%">
        <thead>
            <tr>
                <th>No</th>
                <th>NIS</th>
                <th>Nama Siswa</th>
                <th>JK</th>
                <th>Tanda Tangan</th>
            </tr>
        </thead>
        <tbody>
           
        </tbody>
    </table>
</body>
</html>