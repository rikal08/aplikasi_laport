@extends('layouts.app')

@section('title')
    Pilih Tahun Ajaran
@endsection

@section('content')
@if($kelas->tingkatan==7)

    <div class="row">
        <div class="col-lg-12">
            <div class="alert alert-danger">
                <p>Halaman ini hanya bisa diakses oleh waki kelas tingkat 8 dan 9</p>
            </div>
        </div>
    </div>

@else
    <div class="row">
        <div class="col-lg-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Data Sikap Spritual & Sosial (KI1 & KI2) Berdasarkan Hasil Rapat</h3>
                </div>
                <div class="box-body">
                    <table id="example2" class="table table-bordered table-hover">
                      <thead>
                        <tr>
                            <th>No</th>
                            <th>Tahun Ajaran</th>
                            <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($th as $item)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $item->semester }} - {{ $item->tahun_ajaran }}</td>
                                <td><a class="btn btn-primary" href="{{ url('raport/hasil-sikap-spritual-sosial/'.$item->id_ta) }}"> Lihat Data</a></td>
                            </tr>
                        @endforeach
                      </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endif
@endsection