@extends('layouts.admin')

<?php $no = 1; ?>
@section('content')
    <center><h3>Data Karyawan</h3></center>
    <br><br>
    <a href="/karyawan/create" class="btn btn-success">Tambah Data</a> 
    <div class="col-sm-12">
        
        @if(session()->get('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div>
        @endif
    </div>
    <div class="header-wrap">
        <form class="form-header" action="" method="POST">
            <input class="au-input au-input--xl" type="text" name="search" placeholder="Cari berdasarkan nama / status kerja" />
            <button class="au-btn--submit" type="submit">
                <i class="zmdi zmdi-search"></i>
            </button>
    </form>
    </div>
    <br>
    <div class="table-responsive table--no-card m-b-40">
    <table class="table table-border table-striped table-earning">
        <thead>
            <tr>
                <th> No </th>
                <th> NIP </th>
                <th> Nama </th>
                <th> Alamat</th>
                <th> No Telepon </th>
                <th> Jabatan </th>
                <th class="text-right">Status Kerja</th>
                <th colspan=2></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($karyawans as $karyawan)
                <tr>
                    <td> {{ $no++ }}</td>
                    <td> {{ $karyawan->nip }}</td>
                    <td> {{ $karyawan->nama }}</td>
                    <td> {{ $karyawan->alamat }}</td>
                    <td> {{ $karyawan->no_telepon }}</td>
                    <td> {{ $karyawan->jabatan }}</td>
                    <td class="text-right"> {{ $karyawan->status_kerja }}</td>
                    <td>
                        <a href="/karyawan/{{ $karyawan->id }}/edit/" class="btn btn-primary">Edit</a>
                    </td>
                    <td>
                        <form action="/karyawan/{{$karyawan->id}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection