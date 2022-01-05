@extends('layouts.app')

@section('content')
    <div class="col-md-8 offset-md-2">
        <h3> Tambah Karyawan</h3>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all as $error)
                        <li> {{ $error }}</li>
                    @endforeach
                </ul>
            </div><br />
        @endif

        <form method="post" action="/karyawan">
            @csrf
            <div class="form-group">
                <label for="nip"> NIP </label>
                <input type="text" class="form-control" name="nip">
            </div>
            <div class="form-group">
                <label for="nama"> Nama </label>
                <input type="text" class="form-control" name="nama">
            </div>
            <div class="form-group">
                <label for="alamat"> Alamat </label>
                <input type="text" class="form-control" name="alamat">
            </div>
            <div class="form-group">
                <label for="no_telepon"> No Telepon </label>
                <input type="text" class="form-control" name="no_telepon">
            </div>
            <div class="form-group">
                <label for="jabatan"> Jabatan </label>
                <input type="text" class="form-control" name="jabatan">
            </div>
            <div class="form-group">
                <label for="status_kerja"> Status Kerja </label>
                <input type="text" class="form-control" name="status_kerja">
            </div>
            <button type="submit" class="btn btn-primary"> Simpan </button>
        </form>
    </div>
@endsection