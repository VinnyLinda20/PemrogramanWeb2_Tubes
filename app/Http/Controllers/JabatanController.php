<?php

namespace App\Http\Controllers;

use App\Jabatan;
use Illuminate\Http\Request;
use App\Http\Requests\StoreJabatanRequest;
use App\Http\Requests\UpdateJabatanRequest;

class JabatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jabatan = Jabatan::all();
        return view('jabatan.index', ['jabatans' => $jabatan]);
    }


    public function create()
    {
        return view('jabatan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'id' => 'required',
            'nama_jabatan' => 'required',
        ]);

        Jabatan::create($request->all());
        return redirect('/jabatan')->with('success', 'jabatan saved!');
    }

    public function edit($id)
    {
        $jabatan = Jabatan::find($id);
        return view('jabatan.edit', compact('jabatan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Jabatan  $faculty
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Jabatan $jabatan)
    {
        $request->validate([
            'id' => 'required',
            'nama_jabatan' => 'required',
        ]);

        $jabatan->update($request->all());
        return redirect('/jabatan')->with('success', 'jabatan Updated!');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Jabatan $faculty
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jabatan $jabatan)
    {
        $jabatan->delete();
        return redirect('/jabatan')->with('success', 'Jabatan deleted');
    }
}