@extends('layouts.admin')

@section('content')
    <div class="col-md-8 offset-md-2">
        <h3> Tambah Jabatan</h3>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all as $error)
                        <li> {{ $error }}</li>
                    @endforeach
                </ul>
            </div> <br />
        @endif

        <form method="post" action="/jabatan">
            @csrf
            <div class="form-group">
                <label for="id"> ID </label>
                <input type="text" class="form-control" name="id">
            </div>
            <div class="form-group">
                <label for="nama_jabatan"> Jabatan </label>
                <input type="text" class="form-control" name="nama_jabatan">
            </div>
            <button type="submit" class="btn btn-primary"> Simpan </button>
        </form>
    </div>
@endsection