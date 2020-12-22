<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nagari;
use App\Models\Jorong;
use App\Models\KartuKeluarga;

class KartuKeluargaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kartu_keluarga = KartuKeluarga::all();
        $nagari = Nagari::all();
        $jorong = Jorong::all();
        // dd()

        $option = array('0' => 'tidak ada');
        foreach($jorong as $j){
            $option[] = ['data-tag' => $j->nagari_id];
        }

        return view('kartu_keluarga.index', compact('kartu_keluarga', 'nagari', 'jorong', 'option'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        KartuKeluarga::create(array(
            'jorong_id' => $request->jorong,
            'no' => $request->no,
            'tanggal_pencatatan' => $request->tanggal_pencatatan
        ));
        // toastr()->success('Dokumen Berhasil diubah!');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kk = KartuKeluarga::all()->where('id', $id)->first();
        dd($kk);
        return view('kartu_keluarga.show', compact('kk'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
