@extends('layout.app', [
    'namePage' => 'Data Transaksi',
])
@section('title', 'Arah Kita | Data Transaksi')
@section('content')
    <div class="panel-header panel-header-sm">
    </div>
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col">
                                <h4 class="card-title"> Data Transaksi</h4>

                            </div>
                            <div class="col-md-5">
                                <div class="row">
                                    <form action="/transaksi" method="GET">
                                        <div class="input-group no-border ">
                                            <input type="date" value="{{ $request->search_tgl }}" class="form-control"
                                                placeholder="Search..." name="search_tgl">
                                            <div class="input-group-append">
                                                <div class="input-group-text">
                                                    <button class="border-0 " type="submit"> <i
                                                            class="now-ui-icons ui-1_zoom-bold"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="row">
                                    <form action="/transaksi" method="GET">
                                        <div class="input-group no-border ">
                                            <input type="text" value="{{ $request->search }}" class="form-control"
                                                placeholder="Search..." name="search">
                                            <div class="input-group-append">
                                                <div class="input-group-text">
                                                    <i class="now-ui-icons ui-1_zoom-bold"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    @if ($transaksi->count())

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class=" text-primary">
                                        <th scope="col">No</th>
                                        <th scope="col">Kode Boking</th>
                                        <th scope="col">Tanggal Transaksi</th>
                                        <th scope="col">Nama Pembeli</th>
                                        <th scope="col">Nama Wisata</th>
                                        <th scope="col">Jumlah Tiket</th>
                                        <th class="text-right" scope="col">Total Harga</th>

                                        <th class="text-right" scope="col">action</th>

                                    </thead>
                                    <tbody>
                                        @foreach ($transaksi as $tsr)
                                            <tr>
                                                <th scope="row">{{ $loop->iteration }}</th>
                                                <td>{{ $tsr->kode_transaksi }}</td>
                                                <td>{{ $tsr->created_at }}</td>
                                                <td>{{ $tsr->user_mobile->nama }}</td>
                                                <td>{{ $tsr->wisata->nama_wisata }}</td>
                                                <td>{{ $tsr->jumlah_tiket }}</td>
                                                <td class="text-right">
                                                    {{ $tsr->total_harga }}
                                                </td>

                                                <td class="text-right">
                                                    <a href="{{ url('transaksi/' . $tsr->id . '/edit') }}"><button
                                                            class="now-ui-icons shopping_tag-content btn btn-success border-0 p-2"></button></a>

                                                    <a href="transaksi/delete/{{ $tsr->id }}"><button
                                                            class="btn btn-danger border-0 p-2 now-ui-icons ui-1_simple-remove"
                                                            id="btn-hapus-transaksi" data-id-transaksi={{ $tsr->id }}>
                                                            <span data-feather="x-circle"></span></button>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        @else
                            <p class="text-center p-4">No Data</p>
                    @endif
                </div>
            </div>
        </div>

    </div>
@endsection
