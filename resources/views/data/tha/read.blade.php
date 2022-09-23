@extends('layouts.app')


@section('title')
    Data Tahun Ajaran
@endsection

@section('content')
<div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Data Tahun Ajaran</h3>
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
              <th>Semester</th>
              <th>Tahun Ajaran</th>
              <th>Aksi</th>
            </tr>
            </thead>
            <tbody>
           
            
            <tr>
                <td>1</td>
                <td>1</td>
                <td>2022/2023</td>
                <td>
                    <a href="" class="btn btn-danger"> <i class="fa fa-trash"></i></a>
                   
                </td>
            </tr>
            <tr>
                <td>1</td>
                <td>2</td>
                <td>2022/2023</td>
                <td>
                    <a href="" class="btn btn-danger"> <i class="fa fa-trash"></i></a>
                    
                </td>
            </tr>
           
          
           
         
            </tbody>
          </table>
        </div>
      </div>
    </div>
</div>
@endsection