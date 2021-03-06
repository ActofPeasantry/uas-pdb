<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nagari;
use App\Models\Jorong;
use App\Models\KartuKeluarga;

use App\Models\Penduduk;
use App\Models\Kewarganegaraan;
use App\Models\LevelPendidikan;
use App\Models\Pekerjaan;

class PendudukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $penduduk = Penduduk::all();
        $kartu_keluarga = KartuKeluarga::all();
        $nagari = Nagari::all();
        $jorong = Jorong::all();

        // dd($penduduk);

        return view('penduduk.index', compact('penduduk','kartu_keluarga', 'nagari', 'jorong'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $penduduk = Penduduk::all();
        $kartu_keluarga = KartuKeluarga::all();
        $nagari = Nagari::all();
        $jorong = Jorong::all();
        $kewarganegaraan = Kewarganegaraan::all();
        $level_pendidikan = LevelPendidikan::all();
        $pekerjaan = Pekerjaan::all();

        return view('penduduk.create', compact('penduduk', 'kartu_keluarga', 'nagari', 'jorong', 'kewarganegaraan', 'level_pendidikan', 'pekerjaan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd('blin');
        Penduduk::create($request->all());

        return redirect()->route('penduduk');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $penduduk = Penduduk::all()->where('id', $id)->first();
        // dd($penduduk);
        return view('penduduk.show', compact('penduduk'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $penduduk = Penduduk::all()->where('id', $id)->first();
        $kartu_keluarga = KartuKeluarga::all();
        $nagari = Nagari::all();
        $jorong = Jorong::all();
        $kewarganegaraan = Kewarganegaraan::all();
        $level_pendidikan = LevelPendidikan::all();
        $pekerjaan = Pekerjaan::all();

        // dd($penduduk);

        return view('penduduk.edit', compact('penduduk', 'kartu_keluarga', 'nagari', 'jorong', 'kewarganegaraan', 'level_pendidikan', 'pekerjaan'));
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
        Penduduk::find($id)->update($request->all());
        return redirect()->route('penduduk');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Penduduk::destroy($id);
        return redirect()->back();
    }
}
