@extends('layouts.app')


@section('title')
    Data Tahun Ajaran
@endsection

@section('content')
@include('layouts.alert')
<div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Data Tahun Ajaran</h3>
        </div>
        <div class="box-header">
          <form action="{{ url('data-tha') }}" method="POST">
            @csrf
            @method('POST')
              <div class="form-group">
                <label for="">Semester</label>
                <select name="semester" id="" class="form-control">
                  <option value="Ganjil">Ganjil</option>
                  <option value="Genap">Genap</option>
                </select>
              </div>
              <div class="form-group">
                <label for="">Tahun Ajaran</label>
                <input type="text" class="form-control" required placeholder="Ex: 2022/2023" name="tahun_ajaran">
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
              <th>Semester</th>
              <th>Tahun Ajaran</th>
              <th>Aksi</th>
            </tr>
            </thead>
            <tbody>
              @foreach ($tha as $item)
              <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $item->semester }}</td>
                <td>{{ $item->tahun_ajaran }}</td>
                <td>
                    <a href="" data-toggle="modal" data-target="#modal-hapus{{ $item->id_ta }}" class="btn btn-danger"> <i class="fa fa-trash"></i></a>
                </td>
              </tr>
              @include('data.tha.delete')
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
</div>
@endsection