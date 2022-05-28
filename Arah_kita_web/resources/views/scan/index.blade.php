@extends('layout.main')
@section('title', 'Arah Kita | Scan tiket')
@section('content')
    <div class="container">
        <div class="row ">
            <div class="col-md-5">
                <div id="reader" width="20px"></div>
                <form action="/scan" method="POST">
                    @csrf

                    <input class="mt-5" name="kode_tiket" type="text" id="result" required>

                    <Button type="submit">cek tiket</Button>
                </form>
            </div>
        </div>


    </div>


@endsection
