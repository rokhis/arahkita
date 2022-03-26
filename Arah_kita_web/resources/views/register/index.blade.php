@extends('layout.main')
@section('title', 'Arah Kita | Register')
@section('container')
    <div class="container">
      <div class="row justify-content-center mt-5">
        <div class="col-lg-5">
          <main class="">
            <form action="/register" method="POST" class="form-control form-control-sm">
              @csrf
              <h3 class="text-white mb-3 fw-normal ">Silahkan Daftar</h3>
              

                <div class="col-auto mb-3">
                  <label for="exampleInputEmail1" class="form-label">Nama</label>
                  <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Nama" required value="{{ old('nama') }}">
                @error('nama')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
                </div>
              
                <div class="col-auto mb-3">
                  <label for="exampleInputEmail1" class="form-label">Username</label>
                  <input type="text" class="form-control @error('username') is-invalid @enderror" name="username" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Username" required value="{{ old('username') }}">
                  @error('username')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
                </div>

                <div class="col-auto mb-3">
                  <label for="email" class="form-label">Email</label>
                  <input type="email" id="email" class="form-control  @error('email') is-invalid @enderror" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="name@example.com" required value="{{ old('email') }}">
                  @error('email')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
                </div>

               <div class="col-sm-5">
                  <label for="password" class="col-form-label">Password</label>
                  <input type="password" id="password" class="form-control  @error('password') is-invalid @enderror" name="password" class="form-control" aria-describedby="passwordHelpInline" placeholder="password" required>
                  @error('password')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
                  <span id="password" class="form-text">
                    Must be 8-20 characters long.
                   </span>
               </div>
                  
              <button class="w-100 btn btn-md btn-primary mt-3" type="submit">Register</button>
              <small class="mt-5 text-right">Sudah Punya Akun ? <a href="/login"> Login</a></small>
            </form>
          </main>
      </div>
      </div>
    </div>
@endsection
