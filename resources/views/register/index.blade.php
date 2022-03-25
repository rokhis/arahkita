@extends('layout.main')
@section('title', 'Arah Kita | Register')
@section('container')
    <div class="container">
      <div class="row justify-content-center mt-5">
        <div class="col-lg-5">
          <main class="form-signin">
            <form>
              {{-- <img class="mb-4" src="/img/logo.png" alt="" width="150" height="100"> --}}
              <h3 class="text-white mb-3 fw-normal ">Silahkan Daftar</h3>
          
              <div class="form-floating">
                <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Nama</label>
              </div>
              <div class="form-floating">
                <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Alamat</label>
              </div>
              <div class="form-floating">
                <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">No.Hp</label>
              </div>
              <div class="form-floating">
                <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Username</label>
              </div>
              <div class="form-floating">
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email</label>
              </div>
              <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
              </div>
          
              
              <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Register</button>
              <small class="mt-3 text-right">Sudah Punya Akun ? <a href="/"> Login</a></small>
            </form>
          </main>
      </div>

    </div>
@endsection
