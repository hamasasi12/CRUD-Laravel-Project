<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tugas;

class tugascontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dtTugas = tugas::all();
        return view ('tugas.data-tugas', compact ('dtTugas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('tugas.create-data-tugas');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //   dd($request->all());
        tugas::create ([
            'nama_ibu' => $request->nama_ibu,
            'no_ktp' => $request->no_ktp,
            'tanggal_lahir' => $request->tanggal_lahir,
            'agama' => $request->agama,
            'pendidikan' => $request->pendidikan,
            'pekerjaan' => $request->pekerjaan,
            'range_pendapatan' => $request->range_pendapatan,
            'penghasilan' => $request->penghasilan,
            'status_hidup' => $request->status_hidup,
            'alamat' => $request->alamat,
            'no_handphone' => $request->no_handphone,
            'provinsi' => $request->provinsi,
            'kabupaten' => $request->kabupaten,
            'kecamatan' => $request->kecamatan,
            'kelurahan' => $request->kelurahan,
        ]);

        return redirect ('data-tugas')->with('success', 'Data Berhasil Ditambahkan');
    }
    
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $Peg = tugas::findorfail($id);
        return view('tugas.edit-data-tugas',compact('Peg'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $Peg = tugas::findorfail($id);
        $Peg->update($request->all());
        return redirect ('data-tugas')->with('success', 'Data Berhasil Dirubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $Peg = tugas::findorfail($id);
        $Peg->delete();
        return back()->with('info', 'Data Telah Dihapus');
    }
}
