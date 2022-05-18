@extends('layout.app', [
    'namePage' => 'Edit Profil',
])
@section('title', 'Arah Kita | Data User')
@section('content')

    <div class="panel-header panel-header-sm">
    </div>
    <div class="content">

        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h5 class="title">Edit Profil</h5>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ url('/profil/edit') }}">
                            @csrf
                            @method('put')

                            <div class="row">
                                <div class="col-md-6 pr-1">
                                    <div class="form-group">
                                        <label>Nama</label>
                                        <input type="text" name="nama" id="nama"
                                            class="form-control @error('nama') is-invalid @enderror""
                                                        value=" {{ old('nama', Auth::user()->nama) }}">
                                        @error('nama')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-5 pr-1 ">
                                    <div class="form-group">
                                        <label>Username</label>
                                        <input type="text" name="username" id="username"
                                            class="form-control @error('username') is-invalid @enderror""
                                                        value=" {{ old('username', Auth::user()->username) }}">
                                        @error('username')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 pr-1">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email </label>
                                        <input type="email" name="email" id="email"
                                            class="form-control @error('email') is-invalid @enderror""
                                                        value=" {{ old('email', Auth::user()->email) }}">
                                        @error('email')
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
                    <hr>
                </div>
            </div>
        </div>
    </div>
@endsection
