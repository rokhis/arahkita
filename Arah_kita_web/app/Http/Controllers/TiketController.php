<?php

namespace App\Http\Controllers;

use App\Models\Tiket;
use App\Models\Transaksi;
use Hamcrest\Core\HasToString;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Str;
use SimpleSoftwareIO\QrCode\Generator;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class TiketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tiket = Tiket::all();
        return view('tiket.index', compact('tiket'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // $tiket = new Tiket();
        // $tiket->qr_code = $request->transaksi_id;
        // $tiket->user_mobile_id = $request->user_mobile_id;
        // $tiket->transaksi_id = $request->transaksi_id;
        // $tiket->wisata_id = $request->wisata_id;
        // $tiket->tgl_tiket = $request->tgl_tiket;
        // $tiket->nama_pembeli = $request->nama_pembeli;
        // $tiket->nama_wisata = $request->nama_wisata;
        // $tiket->jumlah_tiket = $request->jumlah_tiket;
        // $tiket->total_harga = $request->total_harga;
        // $tiket->status = $request->status;
        // $tiket->save();

        $validate = $request->validate([
            // 'qr_code' => 'required',
            'user_mobile_id' => 'required',
            'transaksi_id' => 'required',
            'wisata_id' => 'required',
            'tgl_tiket' => 'required|max:255|',
            'nama_pembeli' => 'required',
            'nama_wisata' => 'required',
            'jumlah_tiket' => 'required',
            'total_harga' => 'required',
            'status' => 'required',
        ]);



        $validate['kode_tiket'] = Str::random(20);
        // QrCode::format('png')->generate('djsadhasj');


        Tiket::create($validate);

        Alert::toast('E-tiket berhasil ditambahkan', 'success');

        return redirect()->route('tiket.index');
    }
    // public function generate($id)
    // {
    //     $tiket =  new Tiket();
    //     $qrcode = QrCode::size(400)->generate([$data->name]);
    //     return view('qrcode', compact('qrcode'));
    // }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tiket  $tiket
     * @return \Illuminate\Http\Response
     */
    public function show(Tiket $tiket)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     * @param  int  $id
     * @param  \App\Models\Tiket  $tiket
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tiket = Tiket::find($id);
        return view('tiket.edit', compact('tiket'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tiket  $tiket
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tiket $tiket)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param  int  $id
     * @param  \App\Models\Tiket  $tiket
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $tiket = Tiket::find($id);
        $tiket->delete();
        Alert::toast('Data berhasil dihapus', 'success');
        return redirect()->route('tiket.index');
    }
}
