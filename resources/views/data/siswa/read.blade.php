@extends('layouts.app')


@section('title')
    Data Siswa
@endsection

@section('content')
<div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Data Siswa</h3>
        </div>
        <div class="box-header">
          <a href="" class="btn btn-primary"><i class="fa fa-plus"></i>Tambah Data</a>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table id="example2" class="table table-bordered table-hover">
            <thead>
            <tr>
              <th>No</th>
              <th>ID</th>
              <th>Nama Siswa</th>
              <th>Alamat</th>
              <th>Kelas</th>
              <th>Aksi</th>
            </tr>
            </thead>
            <tbody>
           
            
            <tr>
                <td>1</td>
                <td>123456</td>
                <td>Rendi Saputra</td>
                <td>Jakarta</td>
                <td>VII A</td>
                <td>
                    <a href="" class="btn btn-danger"> <i class="fa fa-trash"></i></a>
                    <a href="" class="btn btn-primary"> <i class="fa fa-edit"></i></a>
                </td>
            </tr>
            
            <tr>
                <td>2</td>
                <td>098765</td>
                <td>Putri Rahayu</td>
                <td>Jakarta</td>
                <td>VII B</td>
                <td>
                    <a href="" class="btn btn-danger"> <i class="fa fa-trash"></i></a>
                    <a href="" class="btn btn-primary"> <i class="fa fa-edit"></i></a>
                </td>
            </tr>
            
            
            </tbody>
          </table>
        </div>
      </div>
    </div>
</div>
@endsection