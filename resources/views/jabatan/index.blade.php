@extends('layouts.admin')

<?php $no = 1; ?>
@section('content')
    <center><h3>Data Jabatan</h3></center>
    <br><br>
    <a href="/jabatan/create" class="btn btn-success"> Tambah Data</a>
    <div class="col-sm-12">

        @if (session()->get('success'))
            <div class="alert alert-sucess">
                {{ session()->get('sucess') }}
            </div>
        @endif
    </div>
    <div class="header-wrap">
        <form class="form-header" action="" method="POST">
            <input class="au-input au-input--xl" type="text" name="search" placeholder="Cari berdasarkan jabatan" />
            <button class="au-btn--submit" type="submit">
                <i class="zmdi zmdi-search"></i>
            </button>
    </form>
    </div>

    <br>
    <div class="table-responsive table--no-card m-b-40">
    <table class="table table-borderless table-striped table-earning">
        <thead>
            <tr>
                <th> No </th>
                <th> ID </th>
                <th> Jabatan </th>
                <th colspan=2></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($jabatans as $jabatan)
                <tr>
                    <td> {{ $no++ }}</td>
                    <td> {{ $jabatan->id }}</td>
                    <td> {{ $jabatan->nama_jabatan }}</td>
                    <td>
                        <a href="/jabatan/{{ $jabatan->id }}/edit/" class="btn btn-primary"> Edit</a>
                    </td>
                    <td>
                        <form action="/jabatan/{{ $jabatan->id }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit"> Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
           