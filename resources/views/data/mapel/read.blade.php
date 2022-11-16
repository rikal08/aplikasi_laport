@extends('layouts.app')


@section('title')
    Data Mata Pelajaran
@endsection

@section('content')
@include('layouts.alert')
<div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Data Mata Pelajaran</h3>
        </div>
        <div class="box-header">
            <form action="{{ url('data-mapel') }}" method="POST">
              @csrf
              @method('POST')
                <div class="form-group">
                  <label for="">Nama Mata Pelajaran</label>
                  <input placeholder="Masukan Nama Mata Pelajaran" type="text" class="form-control" name="nama_mapel" required>
                </div>
                <div class="form-group">
                  <label for="">Type</label>
                  <select name="type" class="form-control" id="">
                    <option value="1">Mata Pelajaran</option>
                    <option value="2">Extrakulikuler</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="">Kurikulum</label>
                  <select name="kurikulum" class="form-control" id="">
                    <option value="3">K13 & Merdeka</option>
                    <option value="1">K13</option>
                    <option value="2">Merdeka</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="">Kelompok (Pilih Jika Memilih Kurikulum K13)</label>
                  <select name="kelompok" class="form-control" id="">
                    <option value="-">-Pilik Kelompok-</option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                  </select>
                </div>

                <div class="form-group">
                  <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i>  Tambah</button>
                </div>
            </form>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table id="example2" class="table table-bordered table-hover">
            <thead>
            <tr>
              <th>No</th>
              <th>Nama Mata Pelajaran</th>
              <th>Type</th>
              <th>Kurikulum</th>
              <th>Kelompok</th>
              <th>Aksi</th>
            </tr>
            </thead>
            <tbody>
           
            @foreach ($mapel as $item)
                
            <tr>
              <td>{{ $no++ }}</td>
              <td>{{ $item->nama_mapel }}</td>
              <td>
                @if ($item->type==1)
                  <span class="badge bg-blue">Mata Pelajaran</span>
                @else
                  <span class="badge bg-green">Ekstrakulikuler</span>    
                @endif
              </td>
              <td>
                @if ($item->kurikulum==1)
                  <span class="badge bg-blue">K13</span>
                @elseif($item->kurikulum==2)
                  <span class="badge bg-green">Merdeka</span>
                @else 
                <span class="badge bg-red">K13 & Merdeka</span>   
                @endif
              </td>
              <td>{{ $item->kelompok }}</td>
              <td>
                <a href="" data-toggle="modal" data-target="#modal-hapus{{ $item->id_mapel }}" class="btn btn-danger"> <i class="fa fa-trash"></i></a>
                
              </td>
            </tr>
            @include('data.mapel.delete')
            @endforeach
            
         
            </tbody>
          </table>
        </div>
      </div>
    </div>
</div>
@endsection