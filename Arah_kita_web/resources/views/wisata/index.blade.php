@extends('layout.app', [
    'namePage' => 'Data Wisata',
])
@section('title', 'Arah Kita | Data Wisata')
@section('content')
    <div class="panel-header panel-header-sm">
    </div>
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"> Data Wisata</h4>
                        <a href="{{ url('wisata/create') }}"><button class="btn btn-primary border-0 p-2"> Tambah
                                Wisata</button></a>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primary">
                                    <th scope="col">No.</th>
                                    <th scope="col">Nama Wisata</th>
                                    <th scope="col">Kategori</th>
                                    <th scope="col">Lokasi</th>
                                    <th class="text-right" scope="col">Harga Tiket</th>
                                    <th class="text-right" scope="col">action</th>

                                </thead>
                                <tbody>
                                    @foreach ($wisata as $wst)
                                        <tr>
                                            <th scope="row">{{ $loop->iteration }}</th>
                                            <td>{{ $wst->nama_wisata }}</td>
                                            <td>{{ $wst->kategori }}</td>
                                            <td>{{ $wst->lokasi }}</td>
                                            <td class="text-right">
                                                {{ $wst->harga_tiket }}
                                            </td>
                                            <td class="text-right">
                                                <a href="{{ url('wisata/' . $wst->id . '/edit') }}"><button
                                                        class="now-ui-icons shopping_tag-content btn btn-success border-0 p-2"></button></a>
                                                <a href="/delete/{{ $wst->id }}"><button
                                                        class="btn btn-danger border-0 p-2 now-ui-icons ui-1_simple-remove"
                                                        id="btn-hapus-wisata" data-id-wisata={{ $wst->id }}>
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
