@extends('layouts.app')


@section('title')
    Data Kepala Sekolah
@endsection

@section('content')
<div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Data Kepala Sekolah</h3>
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
              <th>Kode</th>
              <th>Nama</th>
              <th>Alamat</th>
              <th>Telepon</th>
              <th>Aksi</th>
            </tr>
            </thead>
            <tbody>
           
            
            <tr>
                <td>1</td>
                <td>123456</td>
                <td>Joko Widodo</td>
                <td>Solo</td>
                <td>0897654567</td>
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