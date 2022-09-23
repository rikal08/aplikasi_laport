@extends('layouts.app')


@section('title')
    Data Kelas
@endsection

@section('content')
<div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Data Kelas</h3>
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
              <th>Kode Kelas</th>
              <th>Wali Kelas</th>
              <th>Jumlah Siswa</th>
              <th>Aksi</th>
            </tr>
            </thead>
            <tbody>
           
            
            <tr>
                <td>1</td>
                <td>VII A</td>
                <td>Indah Permata, S.Pd</td>
                <td>30</td>
                <td>
                    <a href="" class="btn btn-danger"> <i class="fa fa-trash"></i></a>
                    <a href="" class="btn btn-primary"> <i class="fa fa-eye"></i> Lihat Siswa</a>
                </td>
            </tr>
           
            <tr>
                <td>2</td>
                <td>VII B</td>
                <td>Budi Sanjaya, S.Pd</td>
                <td>31</td>
                <td>
                    <a href="" class="btn btn-danger"> <i class="fa fa-trash"></i></a>
                    <a href="" class="btn btn-primary"> <i class="fa fa-eye"></i> Lihat Siswa</a>
                </td>
            </tr>
           
         
            </tbody>
          </table>
        </div>
      </div>
    </div>
</div>
@endsection