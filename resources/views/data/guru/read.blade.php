@extends('layouts.app')


@section('title')
    Data Guru
@endsection

@section('content')
<div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Data Guru</h3>
        </div>
        <div class="box-header">
          <a href="{{ url('data-guru/create') }}" class="btn btn-primary"><i class="fa fa-plus"></i>Tambah Data</a>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table id="example2" class="table table-bordered table-hover">
            <thead>
            <tr>
              <th>No</th>
              <th>ID</th>
              <th>Nama Guru</th>
              <th>Mata Pelajaran</th>
              <th>Extrakulikuler</th>
              <th>Alamat</th>
              <th>Telepon</th>
              <th>Email</th>
              <th>Aksi</th>
            </tr>
            </thead>
            <tbody>
           
            @foreach ($guru as $item)
                
            
            <tr>
                <td>{{ $no++; }}</td>
                <td>{{ $item->id_guru }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->nama_mapel }}</td>
                <td>{{ $item->nama_extra }}</td>
                <td>{{ $item->alamat }}</td>
                <td>{{ $item->telepon }}</td>
                <td>{{ $item->email }}</td>
                <td>
                  <a href="" class="btn btn-danger"> <i class="fa fa-trash"></i></a>
                    <a href="" class="btn btn-primary"> <i class="fa fa-edit"></i></a>
                </td>
            </tr>
            @endforeach
            
            </tbody>
          </table>
        </div>
      </div>
    </div>
</div>
@endsection