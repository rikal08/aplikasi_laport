@extends('layouts.app')

@section('title')
    Data Sikap Spritual & Sosial (KI1 & KI2) Berdasarkan Hasil Rapat
@endsection

@section('content')
    @include('layouts.alert')
    <div class="row">
        <div class="col-lg-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Data Sikap Spritual & Sosial (KI1 & KI2) Berdasarkan Hasil Rapat Tahun Ajaran Semester<b> {{ $tha->semester }} - {{ $tha->tahun_ajaran }} Kelas {{ $kelas->kode_kelas }}</b></h3>
                </div>
                <div class="box-header">
                    <a href="" data-toggle="modal" data-target="#create-hasil-rapat" class="btn btn-primary">Tambah Data</a>
                </div>
                @include('raport.create_hasil_rapat_sikap')
                <div class="box-body">
                    <table id="example1" style="width: 100%" class="table table-bordered table-hover">
                      <thead>
                        <tr>
                            <th>No</th>
                            <th>NISN</th>
                            <th>Nama Siswa</th>
                            <th>Hasil Keputusan Rapat</th>
                            <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($hasil as $item)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $item->nisn_siswa }}</td>
                                <td>{{ $item->nama_siswa }}</td>
                                <td>{{ $item->hasil_rapat }}</td>
                                <td><a href="" data-toggle="modal" data-target="#edit-hasil-rapat{{ $item->id_hasil }}" class="btn btn-primary"> Edit</a></td>
                            </tr>
                            @include('raport.edit_hasil_rapat_sikap')
                        @endforeach
                      </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection