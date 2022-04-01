@extends('layout.main')
@section('title', 'Data Wisata')
@section('container')
<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="mt-3">Data Wisata</h1>
            <a href="{{ route('wisata.create') }}" class="btn btn-primary btn-xs pull-right">Tambah Wisata</a>
            <div class="form-control">
                <table class="table table-striped ">
                    <thead class="text-dark">
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Nama Wisata</th>
                            <th scope="col">Kategori</th>
                            <th scope="col">Lokasi</th>
                            <th scope="col">Harga Tiket</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach( $wisata as $wst)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $wst->nama_wisata}}</td>
                            <td>{{ $wst->kategori}}</td>
                            <td>{{ $wst->lokasi}}</td>
                            <td>{{ $wst->harga_tiket}}</td>
    
                            <td>
                                <a href="{{ url ('wisata/'.$wst->id.'/edit') }}" ><button class="btn-success">EDIT</button></a>
                                <form action="{{ url ('wisata/'.$wst->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button type="submit" class="btn-danger " onclick="return confirm ('Yakin untuk mengahapus ?')">
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
@endsection