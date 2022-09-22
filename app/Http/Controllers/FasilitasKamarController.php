<?php

namespace App\Http\Controllers;

use App\Models\Fasilitas_k;
use App\Models\Kamar;
use Illuminate\Http\Request;

class FasilitasKamarController extends Controller
{
    public function index()
    {
        $data_f_kamar = Fasilitas_k::all();
        return view('Admin.F_kamar.home', compact('data_f_kamar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $datatipekamar = Kamar::all();
        return view('Admin.F_kamar.create', compact('datatipekamar'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'tipe_kamar' => 'required',
            'nama_fasilitas' => 'required',
        ]);

        $data = Fasilitas_k::create ([
            'tipe_kamar' => $request->tipe_kamar,
            'nama_fasilitas' => $request->nama_fasilitas,
        ]);

        return redirect('/fasilitas-kamar')->with('success','Data Berhasil Di Tambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $fasilitaskamar = Fasilitas_k::findorfail($id);
        return view('Admin.F_kamar.edit',compact('fasilitaskamar'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'tipe_kamar' => 'required',
            'nama_fasilitas' => 'required',
        ]);

        $fasilitaskamar = Fasilitas_k::findorfail($id);
        $fasilitaskamar->update($request->all());
        
        return redirect('/fasilitas-kamar')->with('success','Data Berhasil Di Edit');
    }

     /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

}
