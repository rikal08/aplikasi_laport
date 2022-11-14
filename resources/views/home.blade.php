@extends('layouts.app')

@section('title')
Home    
@endsection
@section('content')
<div class="alert alert-success">
    <h3>Selamat Datang di Sistem Raport Online</h3>
    <h4><b>Tahun Ajaran Sekarang ({{ $tha->semester }} - {{ $tha->tahun_ajaran }})</b></h4>
</div>
<div class="row">
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-aqua">
        <div class="inner">
          <h3>{{ $guru->count() }}</h3>

          <p>Jumlah Guru</p>
        </div>
        <div class="icon">
          <i class="ion ion-person"></i>
        </div>
        <a href="{{ url('data-guru') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-green">
        <div class="inner">
          <h3>{{ $siswa->count() }}</h3>

          <p>Jumlah Siswa</p>
        </div>
        <div class="icon">
          <i class="ion ion-person"></i>
        </div>
        <a href="{{ url('data-siswa') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-yellow">
        <div class="inner">
          <h3>{{ $kelas->count() }}</h3>

          <p>Jumlah Kelas</p>
        </div>
        <div class="icon">
          <i class="fa fa-star"></i>
        </div>
        <a href="{{ url('data-kelas') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-red">
        <div class="inner">
          <h3>{{ $mapel->count() }}</h3>

          <p>Jumlah Mata Pelajaran</p>
        </div>
        <div class="icon">
          <i class="ion ion-folder"></i>
        </div>
        <a href="{{ url('data-mapel') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
  </div>
@endsection
