@extends('layouts.admin')

@section('content')
    <div class="col-md-8 offset-md-2">
        <center><h3> Tambah Karyawan</h3></center><br>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all as $error)
                        <li> {{ $error }}</li>
                    @endforeach
                </ul>
            </div><br />
        @endif

        <form method="post" action="/karyawan/store">
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
                <select name="jabatan" id="jabatan" class="form-control">
                <option value=>-Pilih jabatan-</option>
                <option value="Karyawan Tetap">Karyawan Tetap</option>
                </select>
            </div>
            <div class="form-group">
                <label for="status_kerja"> Status Kerja </label>
                <select name="status_kerja" id="status_kerja" class="form-control">
                <option value=>-Pilih Status Kerja-</option>
                <option value="Karyawan Tetap">Karyawan Tetap</option>
                <option value="Karyawan Kontrak">Karyawan Kontrak</option>
                <option value="Karyawan Training">Karyawan Training</option>
                </select>
            </div><br>
           <button type="submit" class="btn btn-primary"> Simpan </button>
        </form>
    </div>
@endsection