<?php

namespace App\Http\Controllers;

use App\Models\Fasilitas_hotel;
use Illuminate\Http\Request;

class FasilitasHotelController extends Controller
{
    public function index()
    {
        $datafasilitashotel = Fasilitas_hotel::all();
        return view('Admin.F_hotel.home', compact('datafasilitashotel'));
    }

    public function create()
    {
        $datafasilitashotel = Fasilitas_hotel::all();
        return view('Admin.F_hotel.create', compact('datafasilitashotel'));
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
            'nama_fasilitas' => 'required',
            'keterangan' => 'required',
            'image' => 'required',
        ]);

        $data = Fasilitas_hotel::create ([
            'nama_fasilitas' => $request->nama_fasilitas,
            'keterangan' => $request->keterangan,
            'image' => $request->image,
        ]);

        return redirect('/fasilitas-hotel')->with('success','Data Berhasil Di Tambahkan');
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
        $fasilitashotel = Fasilitas_hotel::findorfail($id);
        return view('Admin.F_hotel.edit',compact('fasilitashotel'));
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
            'nama_fasilitas' => 'required',
            'keterangan' => 'required',
            'image' => 'required',
        ]);

        $fasilitashotel = Fasilitas_hotel::findorfail($id);
        $fasilitashotel->update($request->all());
        
        return redirect('/fasilitas-hotel')->with('success','Data Berhasil Di Edit');
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
