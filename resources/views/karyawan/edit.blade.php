@extends('layouts.admin')

@section('content')
    <div class="col-md-8 offset-md-2">
        <h3> Edit Karyawan</h3>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all as $error)
                        <li> {{ $error }}</li>
                    @endforeach
                </ul>
            </div> <br />
        @endif

        <form method="post" action="/karyawan/{{ $karyawan->id }}">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nip"> NIP </label>
                <input type="text" class="form-control" name="nip" value="{{ $karyawan->nip }}">
            </div>
            <div class="form-group">
                <label for="nama"> Nama </label>
                <input type="text" class="form-control" name="nama" value="{{ $karyawan->nama }}">
            </div>
            <div class="form-group">
                <label for="alamat"> Alamat </label>
                <input type="text" class="form-control" name="alamat" value="{{ $karyawan->alamat }}">
            </div>
            <div class="form-group">
                <label for="no_telepon"> No Telepon </label>
                <input type="text" class="form-control" name="no_telepon" value="{{ $karyawan->no_telepon }}">
            </div>
            <div class="form-group">
                <label for="jabatan"> Jabatan </label>
                <input type="text" class="form-control" name="jabatan" value="{{ $karyawan->jabatan }}">
            </div>
            <div class="form-group">
                <label for="status_kerja"> Status Kerja </label>
                <input type="text" class="form-control" name="status_kerja" value="{{ $karyawan->status_kerja }}">
            </div>
                <button type="submit" class="btn btn-primary"> Simpan </button>
        </form>
    </div>
@endsection