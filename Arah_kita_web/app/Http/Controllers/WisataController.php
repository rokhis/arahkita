<?php

namespace App\Http\Controllers;

use App\Models\Wisata;
use Illuminate\Http\Request;

class WisataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $wisata = \App\Models\Wisata::all();
        return view('wisata.index', compact('wisata'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('wisata.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)


    {

        $validate = $request->validate([
            'nama_wisata' => 'required|max:255|unique:wisatas',
            'kategori' => 'required',
            'deskripsi' => 'required',
            'lokasi' => 'required',
            'harga_tiket' => 'required',
            'gambar_1' => 'required|image|file|max:5120',
            'gambar_2' => 'required|image|file|max:5120',
            'gambar_3' => 'required|image|file|max:5120'

        ]);

        $validate['gambar_1'] = $request->file('gambar_1')->store('wisata-images');
        $validate['gambar_2'] = $request->file('gambar_2')->store('wisata-images');
        $validate['gambar_3'] = $request->file('gambar_3')->store('wisata-images');

        Wisata::create($validate);

        return redirect()->route('wisata.index');
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
        $wst = Wisata::find($id);
        return view('wisata.edit', compact('wst'));
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
        $wisata = Wisata::find($id);
        $wisata->nama_wisata = $request->nama_wisata;
        $wisata->kategori = $request->kategori;
        $wisata->deskripsi = $request->deskripsi;
        $wisata->lokasi = $request->lokasi;
        $wisata->harga_tiket = $request->harga_tiket;
        $wisata->save();

        return redirect()->route('wisata.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $wisata = Wisata::find($id);
        $wisata->delete();
        return redirect('/wisata');
    }
}
