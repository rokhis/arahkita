@extends('layout.main')
@section('title', 'Arah Kita | Login')
@section('container')
    <div class="container">
      <div class="row justify-content-center mt-5">
        <div class="col-lg-5">

          @if(session()->has('success'))
              <div class="alert alert-success alert-dismissible fade show" role="alert">
              {{ session('success') }}
              </div>
          @endif

          @if(session()->has('loginError'))
              <div class="alert alert-danger alert-dismissible fade show" role="alert">
              {{ session('loginError') }}
              </div>
          @endif
          <main class="form-signin">
            {{-- <img class="mb-4" src="/img/logo.png" alt="" width="150" height="100"> --}}
            <h1 class="h3 text-black mb-3 fw-normal text-center ">Silahkan Login</h1>

            <form action="/login" method="POST" class="form-control rounded">
              @csrf

              <div class="col-md mb-2">
                <label for="email" class="form-label">Email</label>
                <input type="email" id="email" class="form-control @error('email') is-invalid @enderror" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="name@example.com" required value="{{ old('email') }}" autofocus>
                @error('email')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
              </div>
              <div class="col-md">
                <label for="password" class="col-form-label">Password</label>
                  <input type="password" id="password" class="form-control" name="password" class="form-control" aria-describedby="passwordHelpInline" placeholder="password" required>
              </div>
              
              <button class="w-100 btn btn-md btn-primary mt-3" type="submit">Login</button>
              <small class="mt-3 text-right text-black">Belum punya akun ? <a href="/register"> Daftar</a></small>
            </form>
          </main>
      </div>

    </div>
    
 @endsection
