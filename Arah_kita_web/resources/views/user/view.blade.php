@extends('layout.app', [
    'namePage' => 'Data User',
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
                        <h5 class="title">User Profil</h5>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="row">

                                <div class="col-md-6 pr-1">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email </label>
                                        <input type="email" class="form-control" value="{{ $user_mobile->email }}"
                                            disabled="">
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-6 pr-1">
                                    <div class="form-group">
                                        <label>Nama Lengkap</label>
                                        <input type="text" class="form-control" disabled=""
                                            value="{{ $user_mobile->nama }}">
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label>Tanggal Lahir</label>
                                        <input type="text" class="form-control" disabled="" class="form-control"
                                            value="{{ $user_mobile->tgl_lahir }}">
                                    </div>
                                </div>
                                <div class="col-md-4 ">
                                    <div class="form-group">
                                        <label>Jenis Kelamin</label>
                                        <input type="text" disabled="" class="form-control"
                                            value="{{ $user_mobile->jenis_kelamin }}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 pr-1">
                                    <div class="form-group">
                                        <label>No Hp</label>
                                        <input type="text" class="form-control" disabled=""
                                            value="{{ $user_mobile->no_hp }}">
                                    </div>
                                </div>

                            </div>
                        </form>

                    </div>
                    <hr>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-user">
                    <div class="image">
                        <img src="/img/bg.png" alt="...">
                    </div>
                    <div class="card-body">
                        <div class="author">
                            <a href="#">
                                <img class="avatar border-gray" src="/img/user.jpg" alt="...">
                                <h5 class="title">{{ $user_mobile->nama }}</h5>
                            </a>
                            <p class="description">
                                michael24
                            </p>
                        </div>
                        <p class="description text-center">
                            "Lamborghini Mercy <br>
                            Your chick she so thirsty <br>
                            I'm in that two seat Lambo"
                        </p>
                    </div>
                    <hr>
                    {{-- <div class="button-container">
                        <button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
                            <i class="fab fa-facebook-f"></i>
                        </button>
                        <button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
                            <i class="fab fa-twitter"></i>
                        </button>
                        <button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
                            <i class="fab fa-google-plus-g"></i>
                        </button>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
@endsection
