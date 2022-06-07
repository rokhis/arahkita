@extends('layout.app', [
    'namePage' => 'Data Wisata',
])
@section('title', 'Arah Kita | Tambah wisata')
@section('content')
    <div class="panel-header panel-header-sm">
    </div>

    <div class="content">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h5 class="title">Tambah Wisata</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ '/wisata' }}" method="POST" enctype="multipart/form-data">

                            @csrf
                            <div class="row">
                                <div class="col-md-6 pr-1">
                                    <div class="form-group">
                                        <label for="nama_wisata">Nama Wisata</label>
                                        <input type="text" name="nama_wisata"
                                            class="form-control @error('nama_wisata') is-invalid @enderror" id="nama_wisata"
                                            placeholder="Masukan Nama Wisata" value="{{ old('nama_wisata') }}" required>
                                        @error('nama_wisata')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4 pr-1">
                                    <div class="form-group">
                                        <label for="kategori" class="">Kategori</label>
                                        <select name="kategori" class="form-control">
                                            <option value="Gunung">Gunung</option>
                                            <option value="Pantai">Pantai</option>
                                            <option value="Air Terjun">Air Terjun</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 pr-1">
                                    <div class="form-group ">
                                        <label for="nama" class="">Deskripsi</label>
                                        <input type="text" name="deskripsi"
                                            class="form-control  @error('deskripsi') is-invalid @enderror" id="lokasi"
                                            placeholder="Masukan Lokasi" value="{{ old('deskripsi') }}" required>
                                        @error('deskripsi')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="form-group ">
                                        <label for="nama" class="">Lokasi</label>
                                        <input type="text" name="lokasi"
                                            class="form-control  @error('lokasi') is-invalid @enderror" id="lokasi"
                                            placeholder="Masukan Lokasi" value="{{ old('lokasi') }}" required>
                                        @error('lokasi')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="form-group ">
                                        <label for="harga_tiket" class="">Harga Tiket</label>
                                        <input type="text" name="harga_tiket"
                                            class="form-control  @error('harga_tiket') is-invalid @enderror"
                                            id="harga_tiket" placeholder="Masukan Harga Tiket"
                                            value="{{ old('harga_tiket') }}" required>
                                        @error('harga_tiket')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4 pr-1">
                                    <div class="row">
                                        <div class="col">
                                            <label for="gambar_1" class="">Gambar 1</label>
                                            <input class="form-control  @error('gambar_1') is-invalid @enderror"
                                                name="gambar_1" type="file" id="formFile">
                                            @error('gambar_1')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col">
                                            <label for="gambar_1" class="">Gambar 2</label>
                                            <input class="form-control  @error('gambar_2') is-invalid @enderror"
                                                name="gambar_2" type="file" id="formFile">
                                            @error('gambar_2')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror

                                        </div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col">
                                            <label for="gambar_1" class="">Gambar 3</label>
                                            <input class="form-control  @error('gambar_3') is-invalid @enderror"
                                                name="gambar_3" type="file" id="formFile">
                                            @error('gambar_3')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary mt-5 ">Tambahkan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
