<?php

namespace App\Http\Controllers;

use App\Models\Kamar;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $datakamar = Kamar::all();
        return view('Admin.home', compact('datakamar'));
    }

    public function create()
    {
        $datakamar = Kamar::all();
        return view('Admin.create', compact('datakamar'));
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
            'jumlah_kamar' => 'required',
        ]);

        $data = Kamar::create ([
            'tipe_kamar' => $request->tipe_kamar,
            'jumlah_kamar' => $request->jumlah_kamar,
        ]);

        return redirect('/admin')->with('success','Data Berhasil Di Tambahkan');
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
        $kamar = Kamar::findorfail($id);
        return view('Admin.edit',compact('kamar'));
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
            'jumlah_kamar' => 'required',
        ]);

        $kamar = Kamar::findorfail($id);
        $kamar->update($request->all());
        
        return redirect('/admin')->with('success','Data Berhasil Di Edit');
    }

     /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function destroy($id)
    // {
    //     $kamar = Kamar::findorfail($id);
    //     $kamar->delete();
    //     return back()->with('destroy','Data Berhasil Di Destroy');
    // }
}
