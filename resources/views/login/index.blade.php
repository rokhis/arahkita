@extends('layout.main')
@section('title', 'Arah Kita | Login')
@section('container')
    <div class="container">
      <div class="row justify-content-center mt-5">
        <div class="col-lg-5">
          <main class="form-signin">
            <form>
              <img class="mb-4" src="/img/logo.png" alt="" width="150" height="100">
              <h1 class="h3 text-white mb-3 fw-bold  ">Silahkan Login</h1>
          
              {{-- <div class="form-floating">
                <input type="email" class="form-control" id="email" placeholder="name@example.com">
                <label for="email">Email</label>
              </div>
              <div class="form-floating">
                <input type="password" class="form-control" id="password" placeholder="Password">
                <label for="password">Password</label>
              </div> --}}
              <div class="input-group input-group-sm mb-2">
                <span class="input-group-text" style="width: 75px" id="inputGroup-sizing-sm">Email</span>
                <input type="email" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="name@example.com">
              </div>
              <div class="input-group input-group-sm mb-2">
                <span class="input-group-text" style="width: 75px" id="inputGroup-sizing-sm">Password</span>
                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="Password">
              </div>
              
              <button class="w-100 btn btn-md btn-primary mt-3" type="submit">Login</button>
              <small class="mt-3 text-right text-white">Belum punya akun ? <a href="/register"> Daftar</a></small>
            </form>
          </main>
      </div>

    </div>
    
 @endsection
