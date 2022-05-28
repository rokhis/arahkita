@extends('layout.app', [
    'namePage' => 'E-tiket',
])
@section('title', 'Arah Kita | E-tiket')
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
                                <h4 class="card-title"> E-tiket</h4>

                            </div>
                            <div class="col-md-5">
                                <form action="/tiket" method="GET">
                                    <div class="input-group no-border p-4">
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
                    @if ($tiket->count())


                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class=" text-primary">
                                        <th scope="col">No</th>
                                        <th scope="col">Qr Code</th>
                                        <th scope="col">Tanggal Tiket</th>
                                        <th scope="col">Nama Pembeli</th>
                                        <th scope="col">Nama Wisata</th>
                                        <th scope="col">Jumlah Tiket</th>
                                        <th class="text-right" scope="col">Total Harga</th>
                                        <th class="text-right" scope="col">status</th>
                                        <th class="text-right" scope="col">action</th>

                                    </thead>
                                    <tbody>
                                        @foreach ($tiket as $tkt)
                                            <tr>
                                                <th scope="row">{{ $loop->iteration }}</th>
                                                <td>
                                                    <div class="visible-print text-center">
                                                        {!! QrCode::size(50)->generate($tkt->kode_tiket) !!}
                                                    </div>
                                                </td>
                                                <td>{{ $tkt->tgl_tiket }}</td>
                                                <td>{{ $tkt->nama_pembeli }}</td>
                                                <td>{{ $tkt->nama_wisata }}</td>
                                                <td>{{ $tkt->jumlah_tiket }}</td>
                                                <td class="text-right">
                                                    {{ $tkt->total_harga }}
                                                </td>
                                                <td class="text-right">{{ $tkt->status }}</td>
                                                <td class="text-right">
                                                    <a href="{{ url('tiket/' . $tkt->id . '/edit') }}"><button
                                                            class="now-ui-icons shopping_tag-content btn btn-success border-0 p-2"></button></a>

                                                    <a href="tiket/delete/{{ $tkt->id }}"><button
                                                            class="btn btn-danger border-0 p-2 now-ui-icons ui-1_simple-remove"
                                                            id="btn-hapus-tiket" data-id-tiket={{ $tkt->id }}>
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
    </div>
@endsection
