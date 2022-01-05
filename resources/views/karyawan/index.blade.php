@extends('layouts.app')


<?php $no = 1; ?>
@section('content')
    <h3>Data Karyawan</h3>
        <a href="/karyawan/create" class="btn btn-success">Tambah Data</a>
        <div class="col-sm-12">
        
        @if(session()->get('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
        @endif
        </div>

    <table class="table table-striped mt-3">
        <thead>
            <tr>
                <th> No </th>
                <th> NIP </th>
                <th> Nama </th>
                <th> Alamat</th>
                <th> No Telepon </th>
                <th> Jabatan </th>
                <th> Status Kerja </th>
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
                    <td> {{ $karyawan->status_kerja }}</td>
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
@endsection