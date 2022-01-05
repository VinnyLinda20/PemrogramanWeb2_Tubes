<?php

namespace App\Http\Controllers;

use App\Karyawan;
use Illuminate\Http\Request;
use App\Http\Requests\StoreKaryawanRequest;
use App\Http\Requests\UpdateKaryawanRequest;

class KaryawanController extends Controller
{
    public function index(){
        $karyawan = Karyawan::all();

        return view('karyawan.index', ['karyawans' => $karyawan]);
    }

    public function create(){
        return view('karyawan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nip' => 'required',
            'nama' => 'required',
            'alamat' => 'required',
            'no_telepon' => 'required',
            'jabatan' => 'required',
            'status_kerja' => 'required',
        ]);

        $karyawan = new Karyawan([
            'nip' => $request->get('nip'),
            'nama' => $request->get('nama'),
            'alamat' => $request->get('alamat'),
            'no_telepon' => $request->get('no_telepon'),
            'jabatan' => $request->get('jabatan'),
            'status_kerja' => $request->get('status_kerja'),
        ]);
        $karyawan->save();
        return redirect('/karyawan')->with('success', 'Karyawan saved!');
    }

    public function edit($id)
    {
        $karyawan = Karyawan::find($id);
        return view('karyawan.edit', compact('karyawan'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nip' => 'required',
            'nama' => 'required',
            'alamat' => 'required',
            'no_telepon' => 'required',
            'jabatan' => 'required',
            'status_kerja' => 'required',
        ]);

        $karyawan = Karyawan::find($id);            
        $karyawan->nip = $request->get('nip');
        $karyawan->nama = $request->get('nama');
        $karyawan->alamat = $request->get('alamat');
        $karyawan->no_telepon = $request->get('no_telepon');
        $karyawan->jabatan = $request->get('jabatan');
        $karyawan->status_kerja = $request->get('status_kerja');
        $karyawan->save();

        return redirect('/karyawan')->with('success', 'Karyawan updated!');
    }


    public function destroy($id)
    {
        $karyawan = Karyawan::find($id);
        $karyawan->delete();

        return redirect('/karyawan')->with('success', 'Karyawan deleted');
    }

}