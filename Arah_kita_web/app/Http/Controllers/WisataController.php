<?php

namespace App\Http\Controllers;

use App\Models\Wisata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use PhpParser\Builder\Function_;
use RealRashid\SweetAlert\Facades\Alert;

class WisataController extends Controller
{
    /**
     * Display a listing of the resource.
     * @param Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */

    public function index(Request $request)
    {
        if ($request->has('search')) {
            $wisata = Wisata::where('nama_wisata', 'like', '%' . $request->search . '%')
                ->orWhere('kategori', 'like', '%' . $request->search . '%')->get();
        } else {
            $wisata = Wisata::all();
        }
        return view('wisata.index', compact('wisata', 'request'));
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
        Alert::toast('Data berhasil ditambahkan', 'success');

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

        $validate = $request->validate([
            'nama_wisata' => 'required|max:255',
            'kategori' => 'required',
            'deskripsi' => 'required',
            'lokasi' => 'required',
            'harga_tiket' => 'required',
            'gambar_1' => 'image|file|max:5120',
            'gambar_2' => 'image|file|max:5120',
            'gambar_3' => 'image|file|max:5120',

        ]);

        // $wisata = Wisata::FindOrFail($id);
        // $wisata->update([
        //     'nama_wisata' => $request->nama_wisata,
        //     'kategori' => $request->kategori,
        //     'deskripsi' => $request->deskripsi,
        //     'lokasi' => $request->lokasi,
        //     'harga_tiket' => $request->harga_tiket,



        // ]);


        //gambar 1
        if (empty($request->file('gambar_1'))) {
            $wisata = Wisata::FindOrFail($id);
            $wisata->update([
                'nama_wisata' => $request->nama_wisata,
                'kategori' => $request->kategori,
                'deskripsi' => $request->deskripsi,
                'lokasi' => $request->lokasi,
                'harga_tiket' => $request->harga_tiket,


            ]);
        } else {
            $wisata = Wisata::FindOrFail($id);
            Storage::delete($wisata->gambar_1);
            $wisata->update([

                'nama_wisata' => $request->nama_wisata,
                'kategori' => $request->kategori,
                'deskripsi' => $request->deskripsi,
                'lokasi' => $request->lokasi,
                'harga_tiket' => $request->harga_tiket,
                'gambar_1' => $request->file('gambar_1')->store('wisata-images')
            ]);
        }

        //gambar 2
        if (empty($request->file('gambar_2'))) {
            $wisata = Wisata::FindOrFail($id);
            $wisata->update([
                'nama_wisata' => $request->nama_wisata,
                'kategori' => $request->kategori,
                'deskripsi' => $request->deskripsi,
                'lokasi' => $request->lokasi,
                'harga_tiket' => $request->harga_tiket,


            ]);
        } else {
            $wisata = Wisata::FindOrFail($id);
            Storage::delete($wisata->gambar_2);
            $wisata->update([

                'nama_wisata' => $request->nama_wisata,
                'kategori' => $request->kategori,
                'deskripsi' => $request->deskripsi,
                'lokasi' => $request->lokasi,
                'harga_tiket' => $request->harga_tiket,
                'gambar_2' => $request->file('gambar_2')->store('wisata-images')
            ]);
        }

        //gambar 3
        if (empty($request->file('gambar_3'))) {
            $wisata = Wisata::FindOrFail($id);
            $wisata->update([
                'nama_wisata' => $request->nama_wisata,
                'kategori' => $request->kategori,
                'deskripsi' => $request->deskripsi,
                'lokasi' => $request->lokasi,
                'harga_tiket' => $request->harga_tiket,


            ]);
        } else {
            $wisata = Wisata::FindOrFail($id);
            Storage::delete($wisata->gambar_3);
            $wisata->update([

                'nama_wisata' => $request->nama_wisata,
                'kategori' => $request->kategori,
                'deskripsi' => $request->deskripsi,
                'lokasi' => $request->lokasi,
                'harga_tiket' => $request->harga_tiket,
                'gambar_3' => $request->file('gambar_3')->store('wisata-images')
            ]);
        }

        // if ($wisata) {
        //     Alert::toast('Data berhasil ditambahkan', 'success');
        //     return redirect()->route('wisata.index');
        // } else {
        //     Alert::toast('Data tidak dirubah', 'info');
        //     return redirect()->route('wisata.index');
        // }
        // dd($wisata);
        Alert::toast('Data berhasil dirubah', 'success');
        return redirect()->route('wisata.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $wisata = Wisata::find($id);
        Storage::delete([
            $wisata->gambar_1,
            $wisata->gambar_2,
            $wisata->gambar_3
        ]);

        $wisata->delete();
        Alert::toast('Data berhasil dihapus', 'success');
        return redirect('/wisata');
    }
}
