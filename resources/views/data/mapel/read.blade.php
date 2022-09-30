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
              <th>Aksi</th>
            </tr>
            </thead>
            <tbody>
           
            @foreach ($mapel as $item)
                
            <tr>
              <td>{{ $no++ }}</td>
              <td>{{ $item->nama_mapel }}</td>
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