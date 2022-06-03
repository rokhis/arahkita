@extends('layout.app', [
    'namePage' => 'View Tiket',
])
@section('title', 'Arah Kita | view e-tiket')
@section('content')
    <div class="panel-header panel-header-sm">
    </div>
    <div class="content">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h5 class="title">E-tiket</h5>
                    </div>
                    <div class="card-body">

                        <div class="row">
                            <div class="col">

                                <label class="pl-3">No Tiket : {{ $tiket->id }}</label>
                            </div>
                            <div class="col">
                                <label class="">Tanggal Tiket : {{ $tiket->tgl_tiket }}</label>

                            </div>

                        </div>
                        <hr>
                        <div class="row pl-3">
                            <label class="text-primary"><em> Dipesan dan Dibayarkan oleh arahkita</em></label>
                        </div>
                        <div class="row">
                            <div class="visible-print text-center pl-5">
                                {!! QrCode::size(100)->generate($tiket->kode_tiket) !!}
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6 pr-3 ">
                                <div class="form-group">
                                    <h7>Detail Wisata</h7>
                                    <div class="form-control mt-2">
                                        <div class="row">
                                            <div class="col">
                                                <div class="" style="height:100px; width:100px;">
                                                    <img class="rounded"
                                                        src="{{ asset('storage/' . $tiket->wisata->gambar_1) }}">
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="row">
                                                    <h7 class="fw-bold">{{ $tiket->wisata->nama_wisata }}</h7>
                                                </div>
                                                <div class="row mt-2">
                                                    <label>{{ $tiket->wisata->lokasi }}</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-6 pr-3 ">
                                <div class="form-group">
                                    <h7>Detail Pembeli</h7>
                                    <div class="form-control mt-2">
                                        <div class="row pl-3">
                                            <label>Nama</label>
                                        </div>
                                        <div class="row pl-4">
                                            <h7>{{ $tiket->user_mobile->nama }}</h7>
                                        </div>
                                        <hr>
                                        <div class="row pl-3">
                                            <label>Email</label>
                                        </div>
                                        <div class="row pl-4">
                                            <h7>{{ $tiket->user_mobile->email }}</h7>
                                        </div>
                                        <hr>
                                        <div class="row pl-3">
                                            <label>No. Hp</label>
                                        </div>
                                        <div class="row pl-4">
                                            <h7>{{ $tiket->user_mobile->no_hp }}</h7>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5 pr-1">
                                <div class="form-group">
                                    <h7>Detail Tiket</h7>
                                    <div class="form-control mt-2">
                                        <div class="row pl-4">
                                            <label>Jumlah Tiket : <h7> {{ $tiket->jumlah_tiket }}</h7></label>
                                        </div>
                                        <hr>
                                        <div class="row pl-4">
                                            <label>Total Harga : {{ $tiket->total_harga }} </label>
                                        </div>
                                        <hr>
                                        <div class="row pl-4">
                                            <label>Status : {{ $tiket->status }} </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>



                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
