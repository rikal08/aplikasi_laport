@extends('layouts.app')

@section('title')
Cetak Blanko Absensi
@endsection

@section('content')
@foreach ($kelas as $item)
<div class="row">
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-aqua">
        <div class="inner">
          <h3>{{ $item->kode_kelas }}</h3>

          <p>Jumlah Guru</p>
        </div>
        <div class="icon">
          <i class="ion ion-person"></i>
        </div>
        <a href="{{ url('print-blanko/'.$item->id_kelas) }}" class="small-box-footer">Cetak <i class="fa fa-print"></i></a>
      </div>
    </div>
    <!-- ./col -->
</div>
@endforeach
@endsection