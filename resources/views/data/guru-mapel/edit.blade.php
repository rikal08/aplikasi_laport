@extends('layouts.app')

@section('title')
    Edit Data Guru
@endsection

@section('content')
@include('layouts.alert')
    <div class="box">
        <div class="box-header">
            <h3>Edit Data Guru</h3>
        </div>
        <div class="box-body">
            <form action="{{ url('data-guru',$data->id_guru) }}" method="POST">
                @method('PUt')
                @csrf
                <div class="form-group">
                    <label for="">Nama Guru</label>
                    <input placeholder="Masukan Nama" value="{{ $data->nama_guru }}" type="text" required class="form-control" name="name">
                </div>
                <div class="form-group">
                    <label for="">NIP Guru</label>
                    <input placeholder="Masukan NIP" value="{{ $data->nip }}" type="text" required class="form-control" name="name">
                </div>
                <div class="form-group">
                    <label for="">Mata Pelajaran</label>
                    <select name="id_mapel" class="form-control" id="">
                        @foreach ($mapel as $item)
                        @if ($data->id_mapel == $item->id_mapel)
                            <option selected value="{{ $item->id_mapel }}">{{ $item->nama_mapel }}</option>
                        @else
                            <option value="{{ $item->id_mapel }}">{{ $item->nama_mapel }}</option>
                        @endif
                        @endforeach
                    </select> 
                </div>
                <div class="form-group">
                    <label for="">Extrakulikuler</label>
                    <select name="id_extra" class="form-control" id="">
                       
                        @foreach ($extra as $item)
                        @if ($data->id_extra == $item->id_extra)
                        <option selected value="{{ $item->id_extra }}">{{ $item->nama_extra }}</option>
                        @elseif ($data->id_extra==null)
                        <option value="{{ $item->id_extra }}">{{ $item->nama_extra }}</option>
                        @endif
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Alamat</label>
                    <input placeholder="Masukan Alamat" value="{{ $data->alamat }}" type="text" required class="form-control" name="alamat">
                </div>
                <div class="form-group">
                    <label for="">Telepon</label>
                    <input placeholder="Masukan Telepon" value="{{ $data->telepon }}" type="text" required class="form-control" name="telepon">
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input placeholder="Masukan Email" type="text" value="{{ $data->email }}" required class="form-control" name="email">
                </div>
                <hr>
                <div class="form-group">
                    <label for="">New Password</label>
                    <input placeholder="Masukan Password Baru" type="text" class="form-control" name="password">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="{{ url('data-kepsek') }}" class="btn btn-danger">Batal</a>
                </div>
            </form>
        </div>
    </div>
@endsection
