@extends('layout.main')
@section('title', 'Arah Kita | Login')
@section('container')
<div class="container">
  <div class="row">
    <div class="col">
      <div class="text-center">
        <img class="imgLogin"  src="/img/logo.png" width="470" height="356" alt="" > 
      </div>
    </div>
    
    <div class="col">
      
      <main class="">
        
        <div class="layout">
          <div class="card mt-5" style="width: 25rem;">
            <form action="/login" method="POST" class="form-signin">
              @csrf
                        {{-- sesion --}}
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
                    
                <div class="col-md mb-2">
                      <label for="email" class="form-label">Email</label>
                      <input type="email" id="email" class="form-control form-control-sm bg-light @error('email') is-invalid @enderror" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="name@example.com" required value="{{ old('email') }}" autofocus>
                      @error('email')
                        <div class="invalid-feedback">
                          {{ $message }}
                        </div>
                      @enderror
                </div>
    
                <div class="col-md mb-2">
                  <label for="password" class="col-form-label">Password</label>
                  <input type="password" id="password" class="form-control form-control-sm bg-light" name="password" class="form-control" aria-describedby="passwordHelpInline" placeholder="password" required>
                </div>
                
                <div class="text-center mb-3">
                  <button class="w-50 btn btn-sm text-white mt-3" type="submit">Login</button>
                </div>
                <small class=" text-right text-black">Belum punya akun ? <a href="/register"> Daftar</a></small>
              
              </form>
            </div>
          </div>    
        </main>
    </div>
  
  </div>
</div>
    
 @endsection
