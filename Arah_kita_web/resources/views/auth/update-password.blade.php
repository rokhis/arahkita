@extends('layout.app', [
    'namePage' => 'Ubah Password',
])
@section('title', 'Arah Kita | Ubah Password')
@section('content')

    <div class="panel-header panel-header-sm">
    </div>
    <div class="content">

        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h5 class="title">Ubah Password</h5>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ url('/password/edit') }}">
                            @csrf
                            @method('put')

                            <div class="row">
                                <div class="col-md-6 pr-1 ">
                                    <div class="form-group">
                                        <label>Password lama</label>
                                        <input type="password" name="password_lama" {{-- value="{{ old('password', Auth::user()->password) }}" --}}
                                            class="form-control  @error('password_lama') is-invalid @enderror">
                                        @error('password_lama')
                                            <div class="  invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-md-6 pr-1 mt-2">
                                    <div class="form-group">
                                        <label for="">Password baru </label>
                                        <input type="password" name="password"
                                            class="form-control  @error('password') is-invalid @enderror">
                                        @error('password')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-md-6 pr-1 mt-1">
                                    <div class="form-group">
                                        <label>Konfirmasi Password</label>
                                        <input type="password" name="password_confirmation"
                                            class="form-control  @error('password_confirmation') is-invalid @enderror"">
                                                @error('password_confirmation')
        <div class="  invalid-feedback">
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
