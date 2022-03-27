@extends('layout.main')
@section('title', 'Arah Kita | Register')
@section('container')
    <div class="container">
      <div class="row justify-content-center">
          <div class="card border-0 mt-5" style="max-width: 800px;">
            <div class="row"> 
              <div class="col border  text-center ">
                <img src="/img/regist-logo.png" class="img-fluid logo2 " width="200" height="200">
              </div>
              <div class="col-md-7 ">
                <main class="">
                  <form action="/register" method="POST" class="form-register" >
                    @csrf
                    <h3 class="text-white mb-3 fw-normal ">Silahkan Daftar</h3>
                    
                      <div class="col-auto mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nama</label>
                        <input type="text" class="form-control form-control-sm @error('nama') is-invalid @enderror" name="nama" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Nama" required value="{{ old('nama') }}">
                      @error('nama')
                        <div class="invalid-feedback">
                          {{ $message }}
                        </div>
                      @enderror
                      </div>
                    
                      <div class="col-auto mb-3">
                        <label for="exampleInputEmail1" class="form-label">Username</label>
                        <input type="text" class="form-control form-control-sm @error('username') is-invalid @enderror" name="username" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Username" required value="{{ old('username') }}">
                        @error('username')
                        <div class="invalid-feedback">
                          {{ $message }}
                        </div>
                      @enderror
                      </div>
      
                      <div class="col-auto mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" id="email" class="form-control form-control-sm @error('email') is-invalid @enderror" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="name@example.com" required value="{{ old('email') }}">
                        @error('email')
                        <div class="invalid-feedback">
                          {{ $message }}
                        </div>
                      @enderror
                      </div>
      
                     <div class="col-sm-5">
                        <label for="password" class="col-form-label">Password</label>
                        <input type="password" id="password" class="form-control form-control-sm @error('password') is-invalid @enderror" name="password" class="form-control" aria-describedby="passwordHelpInline" placeholder="password" required>
                        @error('password')
                        <div class="invalid-feedback">
                          {{ $message }}
                        </div>
                        @enderror
                        <span id="password" class="form-text">
                          Must be 8-20 characters long.
                         </span>
                     </div>
                        
                    <button class="w-100 btn btn-md text-white mt-3" type="submit">Register</button>
                    <small class="mt-5 text-right">Sudah Punya Akun ? <a href="/login"> Login</a></small>
                  </form>
                </main>
  
              </div>

            </div>

          </div>
                 
      </div>
      </div>
    </div>
@endsection
