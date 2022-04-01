@extends('layout.main')
@section('title', 'Arah Kita | edit wisata')
@section('container')
<div class="container">
    <div class="row ">
        <div class="col">
            <div class="card mt-5">

                    <div class="card border-0 mt-5 p-4">
                    <h2 class="mt-3">Edit Data</h2>
                    <form method="POST" action="{{ url ('wisata/'.$wst->id) }}">
                        
                    @csrf
                        <input type="hidden" name="_method" value="PATCH">
                            <div class="card-body">
                                <div class="form-group mb-3">
                                    <label for="nama_wisata">Nama Wisata</label>
                                    <input type="text" name="nama_wisata" class="form-control" id="nama_wisata" value="{{ $wst->nama_wisata }}" required>
                                </div>
        
                                <div class="form-group mb-3">
                                    <select name="kategori" class= "form-control">
                                        <option value="{{ $wst->kategori }}">{{ $wst->kategori }}</option>
                                        <option value="Gunung">Gunung</option>
                                        <option value="Pantai">Pantai</option>
        
                                    </select>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="nama">Lokasi</label>
                                    <input type="text" name="lokasi" class="form-control" id="lokasi" value="{{ $wst->lokasi }}" required>
        
                                </div>
        
        
                                <div class="form-group mb-3">
                                    <label for="harga_tiket" class="mb-1">Harga Tiket</label>
                                    <input type="text" name="harga_tiket" class="form-control" id="harga_tiket" value="{{ $wst->harga_tiket }}" required>
        
                                </div>
        
                                <button type="submit" class="btn btn-primary ">Simpan</button>
                    </form>

                </div>                
            </div>
        </div>
    </div>
</div>
</div>
</div>
@endsection