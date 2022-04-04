@extends('layout.app',[
'namePage' => 'Data Wisata' ,
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
                                                        class="btn-success border-0">EDIT</button></a>
                                                <form action="{{ url('wisata/' . $wst->id) }}" method="POST"
                                                    class="d-inline">
                                                    @csrf
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <button type="submit" class="btn-danger border-0 "
                                                        onclick="return confirm ('Yakin untuk mengahapus ?')">
                                                        HAPUS<span data-feather="x-circle"></span></button>
                                                </form>
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
