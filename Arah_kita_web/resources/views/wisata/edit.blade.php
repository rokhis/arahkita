@extends('layout.app', [
    'namePage' => 'Data Wisata',
])
@section('title', 'Arah Kita | edit wisata')
@section('content')
    <div class="panel-header panel-header-sm">
    </div>
    <div class="content">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h5 class="title">Edit Wisata</h5>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ url('wisata/' . $wst->id) }}" enctype="multipart/form-data">

                            @method('patch')
                            @csrf

                            <div class="row">
                                <div class="col-md-6 pr-1">
                                    <div class="form-group">
                                        <label for="nama_wisata">Nama Wisata</label>
                                        <input type="text" name="nama_wisata"
                                            class="form-control @error('nama_wisata') is-invalid @enderror" id="nama_wisata"
                                            value="{{ $wst->nama_wisata }}" required>
                                        @error('nama_wisata')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4 pr-2">
                                    <div class="form-group">
                                        <label>Kategori</label>
                                        <select name="kategori" class="form-control">
                                            <option value="{{ $wst->kategori }}">{{ $wst->kategori }}</option>
                                            <option value="Gunung">Gunung</option>
                                            <option value="Pantai">Pantai</option>

                                        </select>

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 pr-1">
                                    <div class="form-group">
                                        <label>Deskripsi</label>
                                        <input type="text" name="deskripsi" class="form-control" id="deskripsi"
                                            value="{{ $wst->deskripsi }}" required>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-6 pr-1">
                                    <div class="form-group">
                                        <label>Lokasi</label>
                                        <input type="text" name="lokasi" class="form-control" id="lokasi"
                                            value="{{ $wst->lokasi }}" required>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-3 pr-1">
                                    <div class="form-group">
                                        <label>Harga Tiket</label>
                                        <input type="text" name="harga_tiket" class="form-control" id="harga_tiket"
                                            value="{{ $wst->harga_tiket }}" required>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 pr-1 mb-2">
                                    <label for="formFile" class="form-label">Gambar 1</label>
                                    <div class=" form-control">
                                        <input class="col  @error('gambar_1') is-invalid @enderror" name="gambar_1"
                                            type="file" id="formFile">
                                        @error('gambar_1')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 pr-1 mb-2">
                                    <label for="formFile" class="form-label">Gambar 2</label>
                                    <div class=" form-control">
                                        <input class="col  @error('gambar_2') is-invalid @enderror" name="gambar_2"
                                            type="file" id="formFile">
                                        @error('gambar_2')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 pr-1 mb-2">
                                    <label for="formFile" class="form-label">Gambar 3</label>
                                    <div class=" form-control">
                                        <input class="col  @error('gambar_3') is-invalid @enderror" name="gambar_3"
                                            type="file" id="formFile">
                                        @error('gambar_3')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>




                            <button type="submit" class="btn btn-primary mt-3 ">Simpan</button>

                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h5 class="title">Gambar Wisata</h5>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ url('wisata/' . $wst->id) }}">
                            <div class="row">
                                <div class="col-md pr-1">
                                    <div class="form-group">
                                        <label>Gambar 1</label>
                                        <div class="" style="height:150px; width:150px;">
                                            <img class="rounded" src="{{ asset('storage/' . $wst->gambar_1) }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md pr-1">
                                    <div class="form-group">
                                        <label>Gambar 2</label>
                                        <div class="" style="height:150px; width:150px;">
                                            <img class="rounded" src="{{ asset('storage/' . $wst->gambar_2) }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md pr-1">
                                    <div class="form-group">
                                        <label>Gambar 3</label>
                                        <div class="" style="height:150px; width:150px;">
                                            <img class="rounded" src="{{ asset('storage/' . $wst->gambar_3) }}">
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </form>
                    </div>
                </div>


                {{-- <div class="content">
                <div class="row ">
                    <div class="col">
                        <div class="card ">

                            <div class="card border-0 mt-5 p-4">
                                <h2 class="mt-3">Edit Data</h2>
                                <form method="POST" action="{{ url('wisata/' . $wst->id) }}">

                                    @csrf
                                    <input type="hidden" name="_method" value="PATCH">
                                    <div class="card-body">
                                        <div class="form-group mb-3">
                                            <label for="nama_wisata">Nama Wisata</label>
                                            <input type="text" name="nama_wisata" class="form-control" id="nama_wisata"
                                                value="{{ $wst->nama_wisata }}" required>
                                        </div>

                                        <div class="form-group mb-3">
                                            <select name="kategori" class="form-control">
                                                <option value="{{ $wst->kategori }}">{{ $wst->kategori }}</option>
                                                <option value="Gunung">Gunung</option>
                                                <option value="Pantai">Pantai</option>

                                            </select>
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="nama">Lokasi</label>
                                            <input type="text" name="lokasi" class="form-control" id="lokasi"
                                                value="{{ $wst->lokasi }}" required>

                                        </div>


                                        <div class="form-group mb-3">
                                            <label for="harga_tiket" class="mb-1">Harga Tiket</label>
                                            <input type="text" name="harga_tiket" class="form-control" id="harga_tiket"
                                                value="{{ $wst->harga_tiket }}" required>

                                        </div>

                                        <button type="submit" class="btn btn-primary ">Simpan</button>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
            </div>
        </div>
    @endsection
