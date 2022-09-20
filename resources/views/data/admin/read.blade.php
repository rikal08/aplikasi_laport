@extends('layouts.app')


@section('title')
    Data Administator
@endsection

@section('content')
<div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Data Administator</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table id="example2" class="table table-bordered table-hover">
            <thead>
            <tr>
              <th>No</th>
              <th>Nama</th>
              <th>Email</th>
              <th>Aksi</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($data_admin as $item)
            
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $item->name }}</td>
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