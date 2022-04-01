@extends('layout.main')
@section('title', 'Arah Kita | tambah wisata')
@section('container')
<div class="container">
    <div class="row ">
        <div class="col">
            <div class="card mt-5">

                
                <div class="card border-0 mt-5 p-4" >
                    <form method="POST" action="{{ url ('wisata') }} " >
                        @csrf
                        
                                <div class="form-group mb-3">
                                    <label for="nim">Nama Wisata</label>
                                    <input type="text" name="nama_wisata" class="form-control" id="nama_wisata" placeholder="Masukan Nama Wisata" required>
                                </div>
        
                                <div class="form-group mb-3">
                                    <label for="kategori" class="mb-1">Kategori</label>
                                    <select name="kategori" class="form-control">
                                        
                                        <option value="Gunung">Gunung</option>
                                        <option value="Pantai">Pantai</option>
                                        
                                    </select>
                                </div>
                                
                                <div class="form-group mb-3">
                                    <label for="nama" class="mb-1">Lokasi</label>
                                    <input type="text" name="lokasi" class="form-control" id="lokasi" placeholder="Masukan Lokasi" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="harga_tiket" class="mb-1">Harga Tiket</label>
                                    <input type="text" name="harga_tiket" class="form-control" id="harga_tiket" placeholder="Masukan Harga Tiket" required>
        
                                </div>
                                <button type="submit" class="btn btn-primary ">Simpan</button>
                    </form>
            
                </div>
            </div>
        </div>
    </div>
</div>
@endsection