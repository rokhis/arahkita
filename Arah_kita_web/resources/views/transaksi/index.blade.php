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
                        <h4 class="card-title"> Data Transaksi</h4>

                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primary">
                                    <th scope="col">No</th>
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
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
