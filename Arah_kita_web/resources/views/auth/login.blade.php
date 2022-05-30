@extends('layout.main')
@section('title', 'Arah Kita | Login')
@section('content')
    <div class="container">
        <div class="row p-5">
            <div class="col-md-6 mt-5 text-center">

                <img class="" style="width: 22rem;" src="/img/logo.png">

            </div>

            <div class="col-md">
                <div class="card mt-5 p-4" style="width: 22rem;">
                    <form action="/login" method="POST" class="form-signin">
                        @csrf

                        <div class="col-md mb-2">
                            <label for="email" class="form-label text-left">Email</label>
                            <input type="email" id="email"
                                class="form-control  bg-light @error('email') is-invalid @enderror" name="email"
                                id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="name@example.com" required
                                value="{{ old('email') }}" autofocus>
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="col-md mb-2">
                            <label for="password" class="col-form-label">Password</label>
                            <input type="password" id="password" class="form-control  bg-light" name="password"
                                class="form-control" aria-describedby="passwordHelpInline" placeholder="password"
                                required>
                        </div>

                        <div class="text-center mb-3">
                            <button class="w-50 btn btn-primary text-white mt-3" type="submit">Login</button>
                        </div>


                    </form>
                </div>
            </div>

        </div>

    </div>


@endsection
