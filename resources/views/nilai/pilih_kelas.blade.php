@extends('layouts.app')

@section('title')
    Data Nilai
@endsection

@section('content')
<div class="row">
  <div class="col-lg-4">
    <div class="alert bg-green">
      <p>Silahkan pilih kelas untuk melihat dan menginputkan nilai mata pelajaran</p>
    </div>
  </div>
</div>
@foreach ($kelas as $item)

<div class="row">
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-red">
        <div class="inner">
          <h3>{{ $item->kode_kelas }}</h3>

          <p>Wali Kelas: {{ $item->guru->nama_guru }}</p>
        </div>
        <div class="icon">
          <i class="ion ion-star"></i>
        </div>
        <a href="{{ url('data-nilai/'.$item->id_kelas) }}" class="small-box-footer">Cetak <i class="fa fa-eye"></i></a>
      </div>
    </div>
    <!-- ./col -->
    @endforeach
</div>
@endsection