@extends('layouts.admin')

<?php $no = 1; ?>
@section('content')
    <h3>Data Jabatan</h3>
    <a href="/jabatan/create" class="btn btn-success"> Tambah Data</a>
    <div class="col-sm-12">

        @if (session()->get('success'))
            <div class="alert alert-sucess">
                {{ session()->get('sucess') }}
            </div>
        @endif
    </div>


    <table class="table table-striped mt-3">
        <thead>
            <tr>
               
                <th> ID </th>
                <th> Jabatan </th>
                <th colspan=2></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($jabatans as $jabatan)
                <tr>
                    <td> {{ $no++ }}</td>
                
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
@endsection
           