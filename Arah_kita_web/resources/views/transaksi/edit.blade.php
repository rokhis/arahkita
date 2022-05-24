@extends('layout.app', [
    'namePage' => 'Data Transaksi',
])
@section('title', 'Arah Kita | view transaksi')
@section('content')
    <div class="panel-header panel-header-sm">
    </div>
    <div class="content">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h5 class="title">Data transaksi</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ '/tiket' }}" method="POST" enctype="multipart/form-data">


                            @csrf


                            <div class="row">
                                <div class="col-md-6 pr-1">
                                    <div class="form-group">
                                        <label for="tgl_tiket">Tanggal Tiket</label>
                                        <input type="text" name="tgl_tiket"
                                            class="form-control @error('tgl_tiket') is-invalid @enderror" id="tgl_tiket"
                                            value="{{ $transaksi->tgl_tiket }}" required readonly>
                                        @error('tgl_tiket')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-3 pr-1">
                                    <div class="form-group">
                                        <label for="transaksi_id">No transaksi</label>
                                        <input type="text" name="transaksi_id"
                                            class="form-control @error('transaksi_id') is-invalid @enderror"
                                            id="transaksi_id" value="{{ $transaksi->id }}" required readonly>
                                        @error('tgl_tiket')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3 pr-1">
                                    <div class="form-group">
                                        <label for="tgl_tiket">ID Pembeli</label>
                                        <input type="text" name="user_mobile_id"
                                            class="form-control @error('user_mobile_id') is-invalid @enderror"
                                            id="user_mobile_id" value="{{ $transaksi->user_mobile->id }}" required
                                            readonly>
                                        @error('nama')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6 pr-1">
                                    <div class="form-group">
                                        <label for="nama_pembeli">Nama Pembeli</label>
                                        <input type="text" name="nama_pembeli"
                                            class="form-control @error('nama_wisata') is-invalid @enderror" id="nama_wisata"
                                            value="{{ $transaksi->user_mobile->nama }}" required readonly>
                                        @error('nama')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">

                            </div>
                            <div class="row">
                                <div class="col-md-3 pr-1">
                                    <div class="form-group">
                                        <label for="tgl_tiket">ID wisata</label>
                                        <input type="text" name="wisata_id"
                                            class="form-control @error('wisata_id') is-invalid @enderror" id="wisata_id"
                                            value="{{ $transaksi->wisata->id }}" required readonly>
                                        @error('nama')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 pr-1">
                                    <div class="form-group">
                                        <label>Nama Wisata</label>
                                        <input type="text" name="nama_wisata" class="form-control" id="nama_wisata"
                                            value="{{ $transaksi->wisata->nama_wisata }}" required readonly>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-3 pr-1">
                                    <div class="form-group">
                                        <label>Jumlah Tiket</label>
                                        <input type="text" name="jumlah_tiket" class="form-control" id="jumlah_tiket"
                                            value="{{ $transaksi->jumlah_tiket }}" required readonly>
                                    </div>
                                </div>
                                <div class="col-md-3 pr-1">
                                    <div class="form-group">
                                        <label>Total Harga</label>
                                        <input type="text" name="total_harga" class="form-control" id="total_harga"
                                            value="{{ $transaksi->total_harga }}" required readonly>
                                    </div>
                                </div>
                            </div>

                            <div class="row">

                                <div class="col-md-6 pr-2">
                                    <div class="form-group">
                                        <label>Status</label>
                                        <select name="status" class="form-control" required>
                                            <option value=""> </option>
                                            <option value="Pembayaran Berhasil">Pembayaran Berhasil</option>


                                        </select>

                                    </div>
                                </div>
                            </div>


                            <button type="submit" class="btn btn-primary mt-3 ">Tambahkan e-tiket</button>

                        </form>


                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
